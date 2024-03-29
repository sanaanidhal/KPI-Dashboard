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
        Schema::create('seconds', function (Blueprint $table) {
            $table->id();
            $table->enum('competence', ['HTML','CSS','PHP','Laravel'])->nullable(false);
            $table->integer('user_id');
            $table->double('note');
            $table->integer('notemax')->default(20);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('seconds');
    }
};
