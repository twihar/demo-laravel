<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateMobileInformationTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('mobile_information', function (Blueprint $table) {
            $table->id();

            $table->unsignedBigInteger('salepoint_id')->nullable();
            $table->foreign('salepoint_id')->references('id')->on('salepoints')->onDelete('cascade');

            $table->string('device_key')->nullable();
            $table->string('serial')->nullable();
            $table->string('imei')->nullable();
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
        Schema::dropIfExists('mobile_information');
    }
}
