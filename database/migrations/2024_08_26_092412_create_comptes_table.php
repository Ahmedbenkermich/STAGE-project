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
        Schema::create('comptes', function (Blueprint $table) {
            $table->id();
            $table->integer('num_compte')->nullable();
            $table->string('compte_id');
            $table->string('compte_password');
            

            $table->unsignedBigInteger('code_banque'); 
            $table->foreign('code_banque')->references('code_banque')->on('banques')->onUpdate('cascade')->onDelete('cascade');

            $table->timestamps();
        });
    }


    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('comptes');
    }
};
