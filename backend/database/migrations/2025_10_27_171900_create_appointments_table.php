<?php

// backend/database/migrations/YYYY_MM_DD_create_appointments_table.php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('appointments', function (Blueprint $table) {
            $table->id();
            $table->foreignId('user_id')->constrained(); // Chave estrangeira para a tabela users
            $table->dateTime('scheduled_at');
            $table->string('vehicle_size', 1)->default('M'); // P, M, ou G
            $table->decimal('total_amount', 10, 2);
            $table->string('status')->default('pending_payment');
            $table->timestamps();
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('appointments');
    }
};
