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
        Schema::create('posts', function (Blueprint $table) {
            $table->id();
            $table->string('title');
            $table->string('images0')->nullable();
            $table->string('description')->nullable();
            $table->string('images')->nullable();
            $table->string('description1')->nullable();
            $table->string('images1')->nullable();
            $table->string('description2')->nullable();
            $table->string('slug')->unique()->nullable();
            $table->rememberToken();
            $table->tinyInteger('status')->default(0)->comment('inactive=0,avctive=1');
            $table->foreignId('user_Id')->constrained('users')->cascadeOnDelete()->cascadeOnUpdate()->nullable();
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
        Schema::dropIfExists('posts');
    }
};
