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
        Schema::create('materiais', function (Blueprint $table) {
            $table->id();
            $table->string('nome')-> unique();   
            $table->text('descricao');
            $table->integer('qtd')-> default(1);
            $table->string('imagem')-> nullable;
           
            $table->unisignedBigInterger('id_user');
            $table->foreign('id_user')->references ('id') ->on ('users')->onDelete()-> onUpdate('cascade');
            
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('materiais');
    }
};
