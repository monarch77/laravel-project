<?php

namespace Database\Factories;

use App\Models\Dosen;
use App\Models\Kabupaten;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Mahasiswa>
 */
class MahasiswaFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        $firstDosen = Dosen::all()->first();
        $kabupaten = Kabupaten::all()->random();
        $kodeProvinsi = $kabupaten->provinsi_kode_provinsi;


        return [
            'nim' => $this->faker->unique()->numberBetween(1, 59),
            'nama' => $this->faker->name,
            'foto_mahasiswa' => $this->faker->imageUrl(640, 480, 'people', true, 'Faker'),
            'angkatan' => $this->faker->year($startDate = '-10 years', $endDate = 'now'),
            'email' => $this->faker->unique()->safeEmail,
            'alamat' => $this->faker->address,
            'no_hp' => $this->faker->phoneNumber,
            'jalur_masuk' => $this->faker->randomElement(['SNMPTN', 'SBMPTN', 'Mandiri']),
            'provinsi_kode_provinsi' => $kodeProvinsi,
            'kabupaten_kode_kabupaten' => $kabupaten->kode_kabupaten,
            'dosen_kode_wali' => $firstDosen['kode_wali'],
        ];
    }
}
