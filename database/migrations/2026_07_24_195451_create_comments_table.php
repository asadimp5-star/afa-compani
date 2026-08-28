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
        Schema::create('comments', function (Blueprint $table) {
           $table->id();
            $table->string('name');
            $table->string('title');
            $table->string('description');
            $table->string('reply')->nullable();
            $table->rememberToken();
            $table->tinyInteger('status')->default(0)->comment('inactive=0,avctive=1');
            $table->foreignId('cat_Id')->constrained('categories')->cascadeOnDelete()->cascadeOnUpdate();
            $table->foreignId('current_team_id')->nullable();
            $table->string('profile_photo_path', 2048)->nullable();
            $table->timestamps();
            $table->softDeletes();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('comments');
    }
};
