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
        Schema::create('courses', function (Blueprint $table) {
            $table->bigInteger('id', true)->unique('id_unique');
            $table->string('code', 10)->nullable()->unique('code_unique');
            $table->string('name', 45)->nullable();
            $table->text('description')->nullable();
            $table->string('img', 45)->nullable();
            $table->unsignedBigInteger('user_id')->index('fk_course_users');
            $table->timestamps();
            $table->string('visibility', 10)->nullable()->default('Private');

            $table->primary(['id']);
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('courses');
    }
};
