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
        Schema::create('matchmakings', function (Blueprint $table) {
            $table->id();
            $table->string('id_emp');
            $table->string('id_agence');
            $table->string('ref_voy_user');
            $table->string('ref_voy_agence');

            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('matchmakings');
    }
};
