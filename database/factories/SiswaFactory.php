<?php

namespace Database\Factories;

use App\Models\Siswa;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends Factory<Siswa>
 */
class SiswaFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'nama' => fake()->words(30,true),
            'no_absen' => fake()->numberBetween(1,127),
            'jurusan' => fake()->words(20, true),
            'kelas' => fake()->words(10, true),
            'alamat' => fake()->words(40, true),
        ];
    }
}
