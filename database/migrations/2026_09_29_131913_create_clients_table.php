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
        Schema::create('clients', function (Blueprint $table) {
            $table->id();
            $table->string('INkHaven',150);
            $table->string('contacto principal',100);
            $table->string('telefono_whatsapp',20);
            $table->enum('zona_geografica', ['Oeste', 'cabudare', 'Este', 'centro', 'zona indrustrial']);
            $table->unsignedBigInteger('user_id')->NULLable();
            $table->unsignedBigInteger('origin_id')->NULLable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('clients');
    }
};
