<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateStudentUsersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('student_users', function (Blueprint $table) {
            $table->id();
            $table->integer('user_id');
            $table->string('student_usn')->nullable();
            $table->integer('gender')->nullable();
            $table->integer('college')->nullable();
            $table->integer('school')->nullable();
            $table->integer('university')->nullable();
            $table->integer('degree_course')->nullable();
            $table->integer('branch')->nullable();
            $table->integer('semester')->nullable();
            $table->integer('degree_status')->nullable();
            $table->longText('address')->nullable();
            $table->integer('state')->nullable();
            $table->integer('city')->nullable();
            $table->integer('updated_by')->nullable();
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
        Schema::dropIfExists('student_users');
    }
}
