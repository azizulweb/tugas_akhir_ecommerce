<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Model>
 */
class PembayaranFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'pilih_pembayaran' => $this->faker->randomElement(['Credit Card', 'Bank Transfer', 'PayPal', 'Cash']),
            'status_pembayaran' => $this->faker->randomElement(['Pending', 'Completed', 'Failed']),
            'created_at' => now(),
            'updated_at' => now(),
        ];
    }
}
