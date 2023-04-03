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
        Schema::create('catageries_arbics', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('descrptions');
            $table->string('image');
            $table->string('price');
            $table->timestamps();

        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('catageries_arbics');
    }
};