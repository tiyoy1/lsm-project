<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        if (! Schema::hasTable('testimonials')) {
            Schema::create('testimonials', function (Blueprint $table) {
                $table->id();
                $table->string('name');
                $table->string('photo')->nullable();
                $table->string('program')->nullable();
                $table->string('current_job')->nullable();
                $table->string('company')->nullable();
                $table->text('testimonial');
                $table->unsignedTinyInteger('rating')->default(5);
                $table->boolean('is_approved')->default(false);
                $table->boolean('is_featured')->default(false);
                $table->timestamps();
            });

            return;
        }

        // SQLite (testing) cannot reliably rename/modify columns in-place.
        // Rebuild the table to match the new schema.
        if (DB::getDriverName() === 'sqlite') {
            $oldTable = 'testimonials_legacy';
            if (Schema::hasTable($oldTable)) {
                Schema::drop($oldTable);
            }

            Schema::rename('testimonials', $oldTable);

            Schema::create('testimonials', function (Blueprint $table) {
                $table->id();
                $table->string('name');
                $table->string('photo')->nullable();
                $table->string('program')->nullable();
                $table->string('current_job')->nullable();
                $table->string('company')->nullable();
                $table->text('testimonial');
                $table->unsignedTinyInteger('rating')->default(5);
                $table->boolean('is_approved')->default(false);
                $table->boolean('is_featured')->default(false);
                $table->timestamps();
            });

            // Copy legacy data if present.
            $legacyColumns = collect(DB::select("PRAGMA table_info($oldTable)"))->pluck('name')->all();
            $hasQuote = in_array('quote', $legacyColumns, true);
            $hasRole = in_array('role', $legacyColumns, true);
            $hasIsPublished = in_array('is_published', $legacyColumns, true);
            $hasRating = in_array('rating', $legacyColumns, true);
            $hasPhoto = in_array('photo', $legacyColumns, true);
            $hasCreatedAt = in_array('created_at', $legacyColumns, true);
            $hasUpdatedAt = in_array('updated_at', $legacyColumns, true);

            $select = [
                'name',
                ($hasPhoto ? 'photo' : 'NULL') . ' as photo',
                'NULL as program',
                ($hasRole ? 'role' : 'NULL') . ' as current_job',
                'NULL as company',
                ($hasQuote ? 'quote' : "''") . ' as testimonial',
                ($hasRating ? 'COALESCE(rating, 5)' : '5') . ' as rating',
                ($hasIsPublished ? 'COALESCE(is_published, 0)' : '0') . ' as is_approved',
                '0 as is_featured',
                ($hasCreatedAt ? 'created_at' : 'CURRENT_TIMESTAMP') . ' as created_at',
                ($hasUpdatedAt ? 'updated_at' : 'CURRENT_TIMESTAMP') . ' as updated_at',
            ];

            DB::statement('INSERT INTO testimonials (name, photo, program, current_job, company, testimonial, rating, is_approved, is_featured, created_at, updated_at) SELECT '.implode(', ', $select)." FROM $oldTable");

            Schema::drop($oldTable);

            return;
        }

        // Rename legacy columns when possible (MySQL only) to keep existing data.
        if (DB::getDriverName() === 'mysql') {
            if (! Schema::hasColumn('testimonials', 'testimonial') && Schema::hasColumn('testimonials', 'quote')) {
                DB::statement('ALTER TABLE testimonials CHANGE quote testimonial TEXT NOT NULL');
            }

            if (! Schema::hasColumn('testimonials', 'current_job') && Schema::hasColumn('testimonials', 'role')) {
                DB::statement('ALTER TABLE testimonials CHANGE role current_job VARCHAR(255) NULL');
            }

            if (! Schema::hasColumn('testimonials', 'is_approved') && Schema::hasColumn('testimonials', 'is_published')) {
                DB::statement('ALTER TABLE testimonials CHANGE is_published is_approved TINYINT(1) NOT NULL DEFAULT 0');
            }

            if (Schema::hasColumn('testimonials', 'rating')) {
                DB::statement('ALTER TABLE testimonials MODIFY rating TINYINT UNSIGNED NOT NULL DEFAULT 5');
            }
        }

        Schema::table('testimonials', function (Blueprint $table) {
            if (! Schema::hasColumn('testimonials', 'photo')) {
                $table->string('photo')->nullable()->after('name');
            }

            if (! Schema::hasColumn('testimonials', 'program')) {
                $table->string('program')->nullable()->after('photo');
            }

            if (! Schema::hasColumn('testimonials', 'current_job')) {
                $table->string('current_job')->nullable()->after('program');
            }

            if (! Schema::hasColumn('testimonials', 'company')) {
                $table->string('company')->nullable()->after('current_job');
            }

            if (! Schema::hasColumn('testimonials', 'testimonial')) {
                $table->text('testimonial')->nullable()->after('company');
            }

            if (! Schema::hasColumn('testimonials', 'rating')) {
                $table->unsignedTinyInteger('rating')->default(5)->after('testimonial');
            }

            if (! Schema::hasColumn('testimonials', 'is_approved')) {
                $table->boolean('is_approved')->default(false)->after('rating');
            }

            if (! Schema::hasColumn('testimonials', 'is_featured')) {
                $table->boolean('is_featured')->default(false)->after('is_approved');
            }
        });

        // Ensure sensible defaults for existing rows.
        if (Schema::hasColumn('testimonials', 'testimonial')) {
            DB::table('testimonials')->whereNull('testimonial')->update(['testimonial' => '']);
        }

        if (Schema::hasColumn('testimonials', 'rating')) {
            DB::table('testimonials')->whereNull('rating')->update(['rating' => 5]);
        }
    }

    public function down(): void
    {
        // Intentionally left empty to avoid destructive schema changes.
    }
};
