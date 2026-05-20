<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        if (! Schema::hasTable('contact_settings')) {
            return;
        }

        Schema::table('contact_settings', function (Blueprint $table) {
            if (! Schema::hasColumn('contact_settings', 'logo')) {
                $table->string('logo')->nullable()->after('open_hours');
            }

            if (! Schema::hasColumn('contact_settings', 'favicon')) {
                $table->string('favicon')->nullable()->after('logo');
            }
        });
    }

    public function down(): void
    {
        // Intentionally left empty to avoid dropping live columns.
    }
};

