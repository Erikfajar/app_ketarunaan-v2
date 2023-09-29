<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Model>
 */
class Tingkat_tigaFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
            'nama' => fake()->name(),
            'jurusan' => fake()->name(),
            'tipe' => 'prestasi',
            'pasal_id' => '1',
            'tgl' => fake()->dateTimeBetween('-1 year', 'now'),
            'nit' => fake()->unique()->randomNumber,
        ];
    }
}
