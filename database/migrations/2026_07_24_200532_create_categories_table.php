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
        Schema::create('categories', function (Blueprint $table) {
            $table->id();
            $table->string('title');
            $table->string('product_code');
            $table->string('slug')->nullable()->unique();
            $table->string('description');
            $table->string('imags')->nullable();
            $table->rememberToken();
            $table->tinyInteger('product_type')->comment('carWash=0,tire=1,floor=2,floorMachin=3');
            $table->tinyInteger('status')->default(0)->comment('inactive=0,avctive=1');
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
        Schema::dropIfExists('categoriess');
    }
};
