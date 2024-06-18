<?php

namespace Database\Factories;

use App\Models\Order;
use App\Models\Pembayaran;
use App\Models\Product;
use App\Models\User;
use Database\Seeders\PembayaranSeeder;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Model>
 */
class OrderFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'id_product' => Product::factory(), // assuming you have a Product factory
            'id_users' => User::factory(), // assuming you have a User factory
            'id_pembayaran' => Pembayaran::factory(), // assuming you have a Pembayaran factory
            'jumlah_produk' => $this->faker->numberBetween(1, 10),
            'total_harga' => $this->faker->numberBetween(100000, 1000000, 1000000),
            'tanggal_order' => $this->faker->date(),
            'created_at' => now(),
            'updated_at' => now(),
        ];
    }
}
