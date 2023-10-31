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
        Schema::create('cow_vaccine', function (Blueprint $table) {
            $table->id('id_cow_vaccine');
            $table->foreignId('fk_cow_id')
                ->constrained('cows', 'id_cow');
            $table->foreignId('fk_vaccine_id')
                ->constrained('vaccines', 'id_vaccine');
            $table->text('cow_vaccine_observations')->nullable();
            $table->date('cow_vaccine_date');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('cow_vaccine');
    }
};
