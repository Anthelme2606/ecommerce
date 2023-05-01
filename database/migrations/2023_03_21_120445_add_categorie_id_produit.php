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
        Schema::table('produits', function (Blueprint $table) {
            //
            $table->unsignedBigInteger('cate_id');
            $table->foreign('cate_id')->references('id')->on('categories')->onDelete('cascade');
            schema::enableForeignKeyConstraints();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('produits', function (Blueprint $table) {
            //
            schema::disableForeignKeyConstraints();
            $table->dropForeign(['cate_id']);
        });
    }
};
