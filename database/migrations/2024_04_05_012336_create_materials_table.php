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
            $table->string('name')-> unique();   
            $table->text('description');           
            $table->string('image')-> nullable();                    
            $table->timestamps();
        });

        Schema::create('loans', function (Blueprint $table) {
            $table->id();   

            $table->timestamp('loandate');
            $table->unsignedBigInteger('material_id');           
            $table->foreign('material_id')->references('id')->on('materials')->onDelete('cascade');  

            $table->unsignedBigInteger('customer_id');
            $table->foreign('customer_id')->references('id')->on('customers')->onDelete('cascade');               
            
            $table-> boolean('status')->default(true);
            $table->timestamps();        
           
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
