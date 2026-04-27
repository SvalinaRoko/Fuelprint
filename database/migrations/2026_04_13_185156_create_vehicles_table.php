<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    public function up(): void
    {
        Schema::create('vehicles', function (Blueprint $table) {
            $table->id();

            $table->string('brand', 50);
            $table->string('model', 50);
            $table->unsignedSmallInteger('year');
            $table->string('license_plate', 20)->unique()->nullable();
            $table->unsignedInteger('odometer')->default(0);
            $table->enum('fuel_type', ['petrol', 'diesel', 'electric', 'hybrid']);

            $table->timestamp('created_at')->useCurrent();
            $table->timestamp('updated_at')->useCurrent()->useCurrentOnUpdate();

            $table->foreignId('user_id')
                ->constrained('users')
                ->cascadeOnDelete();
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('vehicles');
    }
};
