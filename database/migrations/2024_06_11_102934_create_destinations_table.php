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
        Schema::create('destinations', function (Blueprint $table) {
            $table->id();
            $table->string('title');
            $table->string('feature_img');
            $table->string('breadcrumb_img');
            $table->string('wheather');
            $table->string('seo_title');
            $table->string('meta_desc');
            $table->longText('desc');
            $table->longText('long_desc');
            $table->string('video_link');
            $table->longText('images');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('destinations');
    }
};
