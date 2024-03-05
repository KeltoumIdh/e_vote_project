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
        Schema::create('votes', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('election_id');
            $table->unsignedBigInteger('voter_id');
            $table->unsignedBigInteger('candid_id');
            $table->timestamp('voted_at')->nullable();

            $table->foreign('election_id')
                ->references('id')
                ->on('elections')
                ->onDelete('cascade');
            $table->foreign('candid_id')
                ->references('id')
                ->on('candidates')
                ->onDelete('cascade');
            $table->foreign('voter_id')
                ->references('id')
                ->on('voters')
                ->onDelete('cascade');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('votes');
    }
};