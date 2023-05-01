<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {

        //
        Schema::create('produit_recommande', function (Blueprint $table) {
            $table->unsignedBigInteger('produit_recommande_id');
            $table->foreign('produit_recommande_id')->references('id')->on('produits')->onDelete('cascade');
            //schema::enableForeignKeyConstraints();

            $table->unsignedBigInteger('produit_id');
            $table->foreign('produit_id')->references('id')->on('produits')->onDelete('cascade');
            
            $table->primary(['produit_recommande_id','produit_id']);
            schema::enableForeignKeyConstraints();
        
    });
}

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        //
    }
};
