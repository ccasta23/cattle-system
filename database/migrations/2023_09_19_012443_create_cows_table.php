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
        Schema::create('cows', function (Blueprint $table) {
            $table->id('id_cow');
            $table->string('cow_name');
            $table->string('cow_code', 6)->unique();
            $table->date('cow_birthdate')->nullable();
            $table->float('cow_weight');
            $table->float('cow_height');
            $table->enum('cow_breed', [
                'Angus',
                'Afrikaner',
                'Ennstaler Bergscheck',
                'Fleckvieh'
            ]);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('cows');
    }
};
