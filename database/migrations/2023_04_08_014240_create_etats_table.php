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
        Schema::create('etats', function (Blueprint $table) {
            $table->id();
            $table->string('nom');
            $table->unsignedBigInteger('cmd_id')->nullable();

            $table->foreign('cmd_id')->references('id')->on('commandes')->onDelete('set null');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('etats');
    }
};
