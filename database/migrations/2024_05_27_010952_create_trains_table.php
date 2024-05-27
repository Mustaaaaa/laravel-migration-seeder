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
        Schema::create('trains', function (Blueprint $table) {
            $table->id();
            $table->string('Azienda', 100);
            $table->string('Stazione_di_partenza', 100);
            $table->string('Stazione_di_arrivo', 100);
            $table->timestamp('Data_di_partenza');
            $table->timestamp('Data_di_arrivo');
            $table->string('Codice_Treno', 8);
            $table->tinyInteger('Numero_Carrozze');
            $table->boolean('In_orario')->default(true);
            $table->boolean('In_ritardo')->default(true);
            $table->boolean('Cancellato')->default(false);
            $table->timestamps('');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('trains');
    }
};
