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
        Schema::create('transactions', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('company');
            $table->string('nohp');
            $table->date('date');
            $table->time('time');
            $table->string('duration');
            $table->string('price');
            $table->string('status');
            $table->string('bank');
            $table->string('BAN');
            $table->string('receipt')->nullable();
            $table->string('linkmeet')->nullable();
            $table->string('created_by', 100);
            $table->string('updated_by', 100)->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('transactions');
    }
};
