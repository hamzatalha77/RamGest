<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateStocksTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('stocks', function (Blueprint $table) {
            $table->string('reference')->primary();
            $table->string('categorie_name');
            $table->string('fornisseur_name');
            $table->integer('prix')->default(0);
            $table->integer('quantite')->default(0);
            $table->foreign('fornisseur_name')->references('fornisseur_name')->on('fornisseurs')->onUpdate('cascade')->onDelete('cascade');
            $table->foreign('categorie_name')->references('categorie_name')->on('categories')->onUpdate('cascade')->onDelete('cascade');
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
        Schema::dropIfExists('stocks');
    }
}
