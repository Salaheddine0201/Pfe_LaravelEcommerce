<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('commands', function (Blueprint $table) {
            $table->id();
            $table->foreignId('user_id')
                  ->nullable()
                  ->constrained()
                  ->onDelete('cascade');         // for logged‑in users
            $table->string('session_id')->nullable();   // for guests
            $table->decimal('subtotal', 10, 2);
            $table->decimal('tax',      10, 2)->default(0);
            $table->decimal('total',    10, 2);
            $table->string('status',    50)->default('pending');
            $table->timestamps();
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('commands');
    }
};
