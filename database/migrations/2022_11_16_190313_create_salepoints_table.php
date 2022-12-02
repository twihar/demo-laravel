<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateSalepointsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('salepoints', function (Blueprint $table) {
            $table->id();
            $table->string('code')->nullable();
            $table->string('name')->nullable();
            $table->string('image')->nullable();
            $table->string('address')->nullable();
            $table->double('latitude')->nullable();
            $table->double('longitude')->nullable();
            $table->string('phone')->nullable();
            $table->boolean('opus_account')->default(false);
            $table->string('gifty_account_id')->nullable();
            $table->bigInteger('points')->default(0);
            $table->string('password')->nullable();

            $table->bigInteger('city_id')->nullable();
            $table->bigInteger('region_id')->nullable();

            $table->unsignedBigInteger('database_id')->nullable();
            $table->foreign('database_id')->references('id')->on('databases')->onDelete('cascade');

            $table->bigInteger('salepoint_type_id')->nullable();
            $table->bigInteger('salepoint_area_id')->nullable();
            $table->bigInteger('salepoint_zone_id')->nullable();
            $table->bigInteger('salepoint_circuit_id')->nullable();
            $table->bigInteger('salepoint_cluster_id')->nullable();
            $table->bigInteger('salepoint_supply_type_id')->nullable();
            $table->bigInteger('salepoint_route_id')->nullable();
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
        Schema::dropIfExists('salepoints');
    }
}
