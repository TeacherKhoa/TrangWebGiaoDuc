<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class Lesson extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('category', function (Blueprint $table) {
            $table->id();
            $table->string('category_name')->nullable();
            $table->string('category_desc')->nullable();
            $table->string('order')->unique();
            $table->tinyInteger('type')->default(1);
            $table->tinyInteger('active')->default(1);
            $table->timestamps();
        });

        Schema::create('course', function (Blueprint $table) {
            $table->id();
            $table->bigInteger('category_id');
            $table->string('course_name')->nullable();
            $table->string('course_desc')->nullable();
            $table->string('order')->unique();
            $table->tinyInteger('type')->default(1);
            $table->tinyInteger('active')->default(1);
            $table->timestamps();
        });

        Schema::create('chapter', function (Blueprint $table) {
            $table->id();
            $table->bigInteger('category_id');
            $table->bigInteger('course_id');
            $table->string('chapter_name')->nullable();
            $table->string('chapter_desc')->nullable();
            $table->string('order')->unique();
            $table->tinyInteger('type')->default(1);
            $table->tinyInteger('active')->default(1);
            $table->timestamps();
        });

        Schema::create('part', function (Blueprint $table) {
            $table->id();
            $table->bigInteger('category_id');
            $table->bigInteger('course_id');
            $table->bigInteger('chapter_id');
            $table->string('part_name')->nullable();
            $table->string('part_desc')->nullable();
            $table->string('order')->unique();
            $table->tinyInteger('type')->default(1);
            $table->tinyInteger('active')->default(1);
            $table->timestamps();
        });

        Schema::create('lesson', function (Blueprint $table) {
            $table->id();
            $table->bigInteger('category_id');
            $table->bigInteger('course_id');
            $table->bigInteger('chapter_id');
            $table->bigInteger('part_id');
            $table->string('lesson_name')->nullable();
            $table->string('lesson_desc')->nullable();
            $table->string('order')->unique();
            $table->tinyInteger('type')->default(1);
            $table->tinyInteger('active')->default(1);
            $table->tinyInteger('check_flag')->default(1);
            $table->integer('time')->nullable();
            $table->timestamps();
        });

        Schema::create('lesson_type', function (Blueprint $table) {
            $table->id();
            $table->string('lesson_type_name')->nullable();
            $table->string('lesson_type_desc')->nullable();
            $table->tinyInteger('active')->default(1);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('category');
        Schema::dropIfExists('course');
        Schema::dropIfExists('chapter');
        Schema::dropIfExists('part');
        Schema::dropIfExists('lesson');
        Schema::dropIfExists('lesson_type');
    }
}
