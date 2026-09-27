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
        Schema::create('first_page_translations', function (Blueprint $table) {
            $table->id();
            $table->foreignId('first_page_id')->constrained('first_pages')->cascadeOnDelete()->cascadeOnUpdate();
            $table->string('locale')->index();
            $table->string('baner')->nullable();
            $table->text('description')->nullable();
            $table->text('description1')->nullable();
            $table->string('description2')->nullable();
            $table->unique(['firstPage_id','locale']);
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('_first_page_translations');
    }
};
