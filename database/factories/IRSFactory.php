<?php

namespace Database\Factories;

use App\Models\Mahasiswa;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\IRS>
 */
class IRSFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        $mahasiswa = Mahasiswa::all()->random()->nim;
        return [
            'semester_aktif' => $this->faker->randomNumber(1,14),
            'status_konfirmasi' => $this->faker->randomElement(['Belum dikonfirmasi', 'Dikonfirmasi']),
            'jumlah_sks' => $this->faker->numberBetween(10, 24),
            'file_sks' => $this->faker->imageUrl(640, 480, 'people', true, 'Faker'),
            'mahasiswa_nim' => $mahasiswa,
        ];
    }
}
