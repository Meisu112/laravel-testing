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
    Schema::create('crops', function (Blueprint $table) {
        $table->id();

        $table->foreignId('farm_id')
            ->constrained('farms')
            ->cascadeOnDelete();

        $table->string('crop_name');
        $table->string('planting_method')->nullable();
        $table->date('planting_date')->nullable();
        $table->date('expected_harvest_date')->nullable();
        $table->string('status')->default('planned');
        $table->text('notes')->nullable();

        $table->timestamps();
    });
}

public function down(): void
{
    Schema::dropIfExists('crops');
}
};
