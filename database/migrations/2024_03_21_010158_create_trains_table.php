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
        Schema::create('trains', function (Blueprint $table) {
            // id
            $table->id();
            // azienda
            $table->string('company', 50);
            // stazione di partenza
            $table->string('departure_station', 50);
            // stazione di arrivo
            $table->string('arrival_station', 50);
            // orario di partenza
            $table->time('departure_time');
            // orario di arrivo
            $table->time('arrival_time');
            // codice treno
            $table->string('train_code', 10)->unique();
            // numero carrozze
            $table->tinyInteger('number_of_carriages');
            // treno in orario
            $table->boolean('on_time')->default(true);
            // treno cancellato
            $table->boolean('cancelled')->default(false);
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
        Schema::dropIfExists('trains');
    }
};
