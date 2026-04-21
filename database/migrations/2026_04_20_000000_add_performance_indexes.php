<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        if (Schema::hasTable('careers')) {
            Schema::table('careers', function (Blueprint $table) {
                $table->index('track', 'careers_track_idx');
                $table->index('is_published', 'careers_is_published_idx');
                $table->index('published_at', 'careers_published_at_idx');
                $table->index(['is_published', 'published_at'], 'careers_is_published_published_at_idx');
                $table->index('sort_order', 'careers_sort_order_idx');
            });
        }

        if (Schema::hasTable('news')) {
            Schema::table('news', function (Blueprint $table) {
                $table->index('published_at', 'news_published_at_idx');
                $table->index('author_id', 'news_author_id_idx');
                $table->index(['author_id', 'published_at'], 'news_author_id_published_at_idx');
            });
        }

        if (Schema::hasTable('student_works')) {
            Schema::table('student_works', function (Blueprint $table) {
                $table->index('published_at', 'student_works_published_at_idx');
                $table->index('author_id', 'student_works_author_id_idx');
                $table->index(['author_id', 'published_at'], 'student_works_author_id_published_at_idx');
                $table->index('creator_name', 'student_works_creator_name_idx');
            });
        }

        if (Schema::hasTable('registrations')) {
            Schema::table('registrations', function (Blueprint $table) {
                $table->index('status', 'registrations_status_idx');
                $table->index('email', 'registrations_email_idx');
                $table->index('created_at', 'registrations_created_at_idx');
            });
        }

        if (Schema::hasTable('students')) {
            Schema::table('students', function (Blueprint $table) {
                $table->index('email', 'students_email_idx');
                $table->index('full_name', 'students_full_name_idx');
            });
        }

        if (Schema::hasTable('partnerships')) {
            Schema::table('partnerships', function (Blueprint $table) {
                $table->index('is_active', 'partnerships_is_active_idx');
                $table->index('sort_order', 'partnerships_sort_order_idx');
            });
        }

        if (Schema::hasTable('testimonials')) {
            Schema::table('testimonials', function (Blueprint $table) {
                $table->index('is_published', 'testimonials_is_published_idx');
                $table->index('sort_order', 'testimonials_sort_order_idx');
            });
        }

        if (Schema::hasTable('alumni')) {
            Schema::table('alumni', function (Blueprint $table) {
                $table->index('tahun_lulus', 'alumni_tahun_lulus_idx');
            });
        }
    }

    public function down(): void
    {
        if (Schema::hasTable('careers')) {
            Schema::table('careers', function (Blueprint $table) {
                $table->dropIndex('careers_track_idx');
                $table->dropIndex('careers_is_published_idx');
                $table->dropIndex('careers_published_at_idx');
                $table->dropIndex('careers_is_published_published_at_idx');
                $table->dropIndex('careers_sort_order_idx');
            });
        }

        if (Schema::hasTable('news')) {
            Schema::table('news', function (Blueprint $table) {
                $table->dropIndex('news_published_at_idx');
                $table->dropIndex('news_author_id_idx');
                $table->dropIndex('news_author_id_published_at_idx');
            });
        }

        if (Schema::hasTable('student_works')) {
            Schema::table('student_works', function (Blueprint $table) {
                $table->dropIndex('student_works_published_at_idx');
                $table->dropIndex('student_works_author_id_idx');
                $table->dropIndex('student_works_author_id_published_at_idx');
                $table->dropIndex('student_works_creator_name_idx');
            });
        }

        if (Schema::hasTable('registrations')) {
            Schema::table('registrations', function (Blueprint $table) {
                $table->dropIndex('registrations_status_idx');
                $table->dropIndex('registrations_email_idx');
                $table->dropIndex('registrations_created_at_idx');
            });
        }

        if (Schema::hasTable('students')) {
            Schema::table('students', function (Blueprint $table) {
                $table->dropIndex('students_email_idx');
                $table->dropIndex('students_full_name_idx');
            });
        }

        if (Schema::hasTable('partnerships')) {
            Schema::table('partnerships', function (Blueprint $table) {
                $table->dropIndex('partnerships_is_active_idx');
                $table->dropIndex('partnerships_sort_order_idx');
            });
        }

        if (Schema::hasTable('testimonials')) {
            Schema::table('testimonials', function (Blueprint $table) {
                $table->dropIndex('testimonials_is_published_idx');
                $table->dropIndex('testimonials_sort_order_idx');
            });
        }

        if (Schema::hasTable('alumni')) {
            Schema::table('alumni', function (Blueprint $table) {
                $table->dropIndex('alumni_tahun_lulus_idx');
            });
        }
    }
};

