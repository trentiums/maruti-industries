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
        Schema::create('inquiries', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('ip')->nullable();
            $table->string('mobile')->nullable();
            $table->string('email')->nullable();
            $table->string('name')->nullable();
            $table->string('subject')->nullable();
            $table->longText('description')->nullable();
            $table->string('page_url')->nullable();
            $table->string('product_interest')->nullable();
            $table->integer('qty')->unsigned()->nullable();
            $table->timestamps();
            $table->softDeletes();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('inquires');
    }
};
