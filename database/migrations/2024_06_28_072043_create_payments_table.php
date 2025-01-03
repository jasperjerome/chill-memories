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
        Schema::create('payments', function (Blueprint $table) {
            $table->id();
            $table->string('payment_id');
            $table->integer('user_id');
            $table->integer('package_id');
            $table->string('name');
            $table->string('email');
            $table->bigInteger('amount');
            $table->string('payment_method');
            $table->string('payment_status');
            $table->longText('if_card');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('payments');
    }
};
