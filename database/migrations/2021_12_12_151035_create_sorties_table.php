<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateSortiesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('sorties', function (Blueprint $table) {
            $table->increments('id');
            $table->string('reference');
            $table->string('categorie');
            $table->string('fornisseur');
            $table->string('client');
            $table->integer('prix')->default(0);
            $table->integer('total')->default(0);
            $table->integer('quantite')->default(0);
            $table->foreign('reference')->references('reference')->on('stocks')->onUpdate('cascade')->onDelete('cascade');
            $table->foreign('client')->references('client')->on('clients')->onUpdate('cascade')->onDelete('cascade');
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
        Schema::dropIfExists('sorties');
    }
}
