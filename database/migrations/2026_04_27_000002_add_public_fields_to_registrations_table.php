<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        if (! Schema::hasTable('registrations')) {
            return;
        }

        Schema::table('registrations', function (Blueprint $table) {
            if (! Schema::hasColumn('registrations', 'last_school')) {
                $table->string('last_school')->nullable()->after('gender');
            }

            if (! Schema::hasColumn('registrations', 'majors')) {
                $table->string('majors')->nullable()->after('address');
            }

            if (! Schema::hasColumn('registrations', 'country')) {
                $table->string('country')->nullable()->after('majors');
            }

            if (! Schema::hasColumn('registrations', 'reason')) {
                $table->text('reason')->nullable()->after('email');
            }
        });
    }

    public function down(): void
    {
        // Intentionally left empty to avoid dropping live columns that may already contain data.
    }
};

