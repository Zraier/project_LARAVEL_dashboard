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
        Schema::create('agencies', function (Blueprint $table) {
            $table->id('id_agence');
            $table->string('name');
            $table->string('username')->unique();
            $table->index('username');
            $table->string('email')->unique();
            $table->string('phone')->nullable();
            $table->string('address')->nullable(); 
            $table->string('photo')->nullable(); 
            $table->enum('status',['active','inactive'])->default('active');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('agencies');
    }
};
