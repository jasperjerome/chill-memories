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
        Schema::create('packages', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('destination_id')->nullable();
            $table->string('package_title');
            $table->string('breadcrumb_img');
            $table->string('feature_img');
            $table->longText('images');
            $table->string('cost');
            $table->string('days');
            $table->string('nights');
            $table->longText('itinerary')->default(null);
            $table->longText('desc');
            $table->timestamps();

            $table->foreign('destination_id')->constrained()->references('id')->on('destinations')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('packages');
    }
};
