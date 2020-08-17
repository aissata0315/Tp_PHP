<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateComptesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('comptes', function (Blueprint $table) {
            $table->id();
            $table->string('numero');
            $table->string('typecompte');
            $table->bigInteger('idPersonne')->unsigned();
            $table->bigInteger('idEntreprise')->unsigned();
            $table->foreign('idPersonne')->references('id')->on('personnes');
            $table->foreign('idEntreprise')->references('id')->on('entreprises');

        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('comptes');
    }
}
