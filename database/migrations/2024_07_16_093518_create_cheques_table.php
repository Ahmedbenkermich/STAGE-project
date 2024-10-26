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
        Schema::create('cheques', function (Blueprint $table) {
            $table->id();
            $table->integer('num');

            $table->unsignedBigInteger('code_banque'); 
            $table->foreign('code_banque')->references('code_banque')->on('banques')->onUpdate('cascade')->onDelete('cascade');

            $table->dateTime('date_valeur')->nullable();
            $table->dateTime('date_entree_caisse')->nullable();


            $table->decimal('montant');
            $table->string('benefication');
            $table->string('motif');
            $table->dateTime('date_emission')->nullable();
            $table->enum('type_cheque', ['P', 'S','F','p','s','f'])->default('s');
            $table->boolean('annuler')->default(0);
            $table->enum('emission',['emis','non_emis'])->default('non_emis');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('cheques');
    }
};
