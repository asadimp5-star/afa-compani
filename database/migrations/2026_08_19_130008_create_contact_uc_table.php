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
        Schema::create('contact_uc', function (Blueprint $table) {
            $table->id();
            $table->string('co_adress')->nullable();
            $table->string('img')->nullable();
            $table->string('factory_adress')->nullable();
            $table->string('img1')->nullable();
            $table->string('description')->nullable();
            $table->string('phone')->nullable();
            $table->string('phone1')->nullable();
            $table->string('email')->nullable();



            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('contact_uc');
    }
};
