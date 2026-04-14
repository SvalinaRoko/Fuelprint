<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    public function up(): void
    {
        Schema::create('fuel_entries', function (Blueprint $table) {
            $table->id();

            $table->date('date');

            $table->decimal('price_per_liter', 10, 2)->unsigned();
            $table->decimal('liters_filled', 10, 2)->unsigned();
            $table->decimal('amount_paid', 10, 2)->unsigned();
            $table->decimal('distance_traveled', 10, 2)->unsigned();
            $table->decimal('odometer', 10, 2)->unsigned();

            $table->string('gas_station', 100)->nullable();

            $table->timestamp('created_at')->useCurrent();
            $table->timestamp('updated_at')->useCurrent()->useCurrentOnUpdate();

            $table->foreignId('vehicle_id')
                ->constrained('vehicles')
                ->cascadeOnDelete();
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('fuel_entries');
    }
};
