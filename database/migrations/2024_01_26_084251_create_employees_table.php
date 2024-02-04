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
        Schema::create('employees', function (Blueprint $table) {
            $table->id('id_emp');
            $table->string('name');
            $table->string('username')->unique();
            $table->index('username');
            $table->string('email')->unique();
            $table->string('phone')->nullable();
            $table->string('address')->nullable();
            $table->string('photo')->nullable(); 
            $table->unsignedBigInteger('id_ent');
            $table->foreign('id_ent')->references('id_ent')->on('entreprises')->onDelete('cascade'); 
            $table->enum('status',['active','inactive'])->default('active');           
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('employees');
    }
};
