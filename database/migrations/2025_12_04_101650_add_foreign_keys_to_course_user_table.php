<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::table('course_user', function (Blueprint $table) {
            $table->foreign(['course_id'], 'fk_course_user_courses1')->references(['id'])->on('courses')->onUpdate('cascade')->onDelete('cascade');
            $table->foreign(['user_id'], 'fk_course_user_users1')->references(['id'])->on('users')->onUpdate('no action')->onDelete('no action');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('course_user', function (Blueprint $table) {
            $table->dropForeign('fk_course_user_courses1');
            $table->dropForeign('fk_course_user_users1');
        });
    }
};
