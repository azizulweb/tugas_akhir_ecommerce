<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Model>
 */
class ProductFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {

        $directories = [
            public_path('assets/img/men'),
            public_path('assets/img/women')
        ];

        // Select a random directory
        $randomDirectory = $this->faker->randomElement($directories);

        // Get all image files from the selected directory
        $files = glob($randomDirectory . '/*.{jpg,jpeg,png,webp,avif}', GLOB_BRACE);

        // Select a random file from the files array
        $randomFile = $this->faker->randomElement($files);

        // Get relative path to store in the database
        $relativePath = str_replace(public_path(), '', $randomFile);


        return [

            'nama_sepatu' => $this->faker->word(),
            'kategori' => $this->faker->word(),
            'gambar' => $relativePath, // Generate a random image URL
            'ukuran' => $this->faker->randomElement(['36', '37', '38', '39', '40', '41', '42', '43']),
            'harga' => $this->faker->numberBetween(50000, 500000),
            'qty' => $this->faker->numberBetween(1, 100),
            'created_at' => now(),
            'updated_at' => now(),
        ];
    }
}
