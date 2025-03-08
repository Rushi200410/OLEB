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
        Schema::create('events', function (Blueprint $table) {
            $table->id();
            $table->integer('timeline');
            $table->integer('q1_id')->nullable();
            $table->integer('q2_id')->nullable();
            $table->integer('q3_id')->nullable();
            $table->integer('q4_id')->nullable();
            $table->integer('q5_id')->nullable();
            $table->integer('q6_id')->nullable();
            $table->integer('q7_id')->nullable();
            $table->integer('points_required');
            $table->string('video_name');
            $table->string('char_name');
            $table->string('side_char_name');
            $table->string('bg_name');
            $table->integer('year');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('events');
    }
};
