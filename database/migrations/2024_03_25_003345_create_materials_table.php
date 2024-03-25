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
        Schema::create('materials', function (Blueprint $table) {
            $table->id();
            $table->string('nome')-> unique();   
            $table->text('descricao');
            $table->integer('qtd')-> default(1);
            $table->string('imagem')-> nullable();                    
            $table->timestamps();
        });

        Schema::create('loan_materials', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('user_id');
            $table->foreign('user_id')->references('id')->on('users');
            $table->unsignedBigInteger('material_id');           
            $table->foreign('material_id')->references('id')->on('materials');
            $table-> boolean('active')->default(true);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('loan_materials');
        Schema::dropIfExists('materials');
    }
};
