<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateDeviceTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('device', function (Blueprint $table) {
            $table->id();
            $table->string('ipserver')->nullable();
            $table->string('port')->nullable();
            $table->string('serial')->nullable();
            $table->string('location')->nullable();
            $table->string('detaillocation')->nullable();
            $table->string('bank1')->nullable();
            $table->string('bank2')->nullable();
            $table->string('bank3')->nullable();
            $table->string('bank4')->nullable();
            $table->string('bank5')->nullable();
            $table->string('bank6')->nullable();
            $table->string('bank7')->nullable();
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
        Schema::dropIfExists('device');
    }
}
