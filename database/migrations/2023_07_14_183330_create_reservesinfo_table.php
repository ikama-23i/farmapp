<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('reservesinfo', function (Blueprint $table) {
            $table->id();
            $table->date('day');
            $table->integer('ampm');
            $table->string('name');
            $table->string('tel');
            $table->string('mail');
            $table->integer('people');
            $table->integer('event_id');
            
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
        Schema::dropIfExists('reservesinfo');
    }
};
