<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateInvestigationSalepointsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('investigation_salepoints', function (Blueprint $table) {
            $table->id();

            $table->unsignedBigInteger('user_id')->nullable(); //User who validate or refuse
            $table->foreign('user_id')->references('id')->on('users')->onDelete('cascade');

            $table->unsignedBigInteger('investigation_id')->nullable();
            $table->foreign('investigation_id')->references('id')->on('investigations')->onDelete('cascade');

            $table->unsignedBigInteger('salepoint_id')->nullable();
            $table->foreign('salepoint_id')->references('id')->on('salepoints')->onDelete('cascade');

            $table->unsignedBigInteger('raison_id')->nullable();
            $table->foreign('raison_id')->references('id')->on('raisons')->onDelete('cascade');

            $table->dateTime('syncronized_at')->nullable();
            $table->text('remark')->nullable();
            $table->enum('status', ['sent', 'pending', 'temp_validated', 'temp_refused', 'validated', 'refused'])->default('sent');
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
        Schema::dropIfExists('investigation_salepoints');
    }
}
