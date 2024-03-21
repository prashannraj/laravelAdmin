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
        Schema::create('chalanis', function (Blueprint $table) {
            $table->id();
            $table->index('++1');
            $table->string('letter_date');
            $table->string('particular');
            $table->string('subject');
            $table->string('related_office');
            $table->string('image');
            $table->timestamps();
            
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('chalanis');
    }
};
