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
        Schema::create('order', function (Blueprint $table) {
            $table->id();
            $table->foreignId('id_product')->constrained('product');
            $table->foreignId('id_users')->constrained('users');
            $table->foreignId('id_pembayaran')->constrained('pembayaran');
            $table->string('jumlah_produk');
            $table->string('total_harga');
            $table->date('tanggal_order');
            $table->string('ukuran');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('order');
    }
};
