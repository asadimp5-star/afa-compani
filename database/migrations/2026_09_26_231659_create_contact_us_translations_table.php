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
        Schema::create('contact_us_translations', function (Blueprint $table) {
            $table->id();
            $table->string('co_adress')->nullable();
            $table->string('factory_adress')->nullable();
            $table->text('description')->nullable();
            $table->string('phone')->nullable();
            $table->string('phone1')->nullable();
            $table->string('email')->nullable();
            $table->foreignId('contact_id')->constrained('contact_us')->cascadeOnDelete()->cascadeOnUpdate();
            $table->string('locale')->index();
            $table->unique(['contact_id','locale']);

            
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('contact_us_translations');
    }
};
