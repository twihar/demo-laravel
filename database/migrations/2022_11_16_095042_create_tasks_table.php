<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTasksTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tasks', function (Blueprint $table) {
            $table->id();

            $table->unsignedBigInteger('investigation_id')->nullable();
            $table->foreign('investigation_id')->references('id')->on('investigations')->onDelete('cascade');

            $table->unsignedBigInteger('answer_type_id')->nullable();
            $table->foreign('answer_type_id')->references('id')->on('answer_types')->onDelete('cascade');

            $table->unsignedBigInteger('question_type_id')->nullable();
            $table->foreign('question_type_id')->references('id')->on('question_types')->onDelete('cascade');

            $table->string('file')->nullable();
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
        Schema::dropIfExists('tasks');
    }
}
