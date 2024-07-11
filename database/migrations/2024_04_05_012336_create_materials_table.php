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
        //Criando a tabela materiais
        Schema::create('materials', function (Blueprint $table) {
            $table->id();
            $table->string('name')-> unique();
            $table->text('description');
            $table->string('image')-> nullable();
            $table-> boolean('status')->default(true);
            $table->timestamps();
        });

        //Criando a tabela loan(Emprestimos)
        Schema::create('loans', function (Blueprint $table) {
            $table->id();
            $table->timestamp('loandate');
            $table->unsignedBigInteger('material_id');
            $table->unsignedBigInteger('customer_id');
            $table->timestamps();

            $table->foreign('material_id')->references('id')->on('materials')->onDelete('cascade');
            $table->foreign('customer_id')->references('id')->on('customers')->onDelete('cascade');

        });

    }
    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('loans');
        Schema::dropIfExists('materials');
    }
};
