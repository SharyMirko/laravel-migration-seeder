<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class Trains extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('trains', function (Blueprint $table) {
            $table->id();
            $table->String('azienda');
            $table->String('in_orario');
            $table->String('cancellato');
            $table->integer('n_carrozze');
            $table->integer('codice_treno');
            $table->time('data_partenza');
            $table->String('stazione_partenza');
            $table->String('stazione_arrivo');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('trains');
    }
}
