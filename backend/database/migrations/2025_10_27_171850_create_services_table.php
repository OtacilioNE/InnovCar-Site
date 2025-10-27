<?php

// backend/database/migrations/YYYY_MM_DD_create_services_table.php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('services', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->text('description')->nullable();
            $table->decimal('price_p', 8, 2)->nullable(); // Preço para Carro P
            $table->decimal('price_m', 8, 2)->nullable(); // Preço para Carro M
            $table->decimal('price_g', 8, 2)->nullable(); // Preço para Carro G
            $table->boolean('is_active')->default(true);
            $table->timestamps();
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('services');
    }
};
