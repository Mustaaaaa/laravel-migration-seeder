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
            $table->string('azienda', 100);
            $table->string('stazione_di_partenza', 100);
            $table->string('stazione_di_arrivo', 100);
            $table->timestamp('data_di_partenza');
            $table->timestamp('data_di_arrivo');
            $table->string('codice_treno', 8);
            $table->tinyInteger('numero_carrozze');
            $table->boolean('in_orario')->default(true);
            $table->boolean('in_ritardo')->default(false);
            $table->boolean('cancellato')->default(false);
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
