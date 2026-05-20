<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        if (! Schema::hasTable('partnerships')) {
            return;
        }

        Schema::table('partnerships', function (Blueprint $table) {
            if (! Schema::hasColumn('partnerships', 'category')) {
                $table->string('category')->default('industry')->after('url');
            }
        });

        DB::table('partnerships')
            ->whereNull('category')
            ->update(['category' => 'industry']);
    }

    public function down(): void
    {
        // Intentionally left empty to avoid dropping live columns.
    }
};

