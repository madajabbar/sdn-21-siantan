<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

class DataPengajarFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'nama' => $this->faker->name(),
            'nip' => $this->faker->numberBetween(),
            'status' => 'aktif',
            'pendidikan' => 's1',
            'jabatan' => 'staff',
            'jenis_kelamin' => $this->faker->randomElement(['Laki-Laki', 'Perempuan']),
            'tempat_lahir' => $this->faker->city(),
            'tanggal_lahir' => $this->faker->date(),
            'agama' => $this->faker->randomElement(['Islam', 'Kristen','Khatolik','Hindu','Budha','Konghucu']),
            'alamat' => $this->faker->city(),
            'telepon' => $this->faker->phoneNumber(),
        ];
    }
}
