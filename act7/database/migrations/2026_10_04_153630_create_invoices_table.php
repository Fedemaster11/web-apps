<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('invoices', function (Blueprint $table) {
            $table->id();
            $table->dateTime('raised_at');
            $table->string('status');
            $table->integer('total_amount');
            $table->foreignId('order_id')
                ->unique()
                ->constrained('orders');
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('invoices');
    }
};