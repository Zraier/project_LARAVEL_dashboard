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
        Schema::create('voy_users', function (Blueprint $table) {
            $table->id('ref_voy_user');
            $table->string('pays');
            $table->string('programme');
            $table->date('date');
            $table->string('duree');
            $table->unsignedBigInteger('id_emp');
            $table->foreign('id_emp')->references('id_emp')->on('employees')->onDelete('cascade');
            $table->enum('status',['done','arrive'])->default('arrive');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('voy_users');
    }
};
