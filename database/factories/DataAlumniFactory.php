<?php

namespace Database\Factories;

use App\Models\User;
use Illuminate\Database\Eloquent\Factories\Factory;

class DataAlumniFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'link' => 'ijazah/contoh.pdf',
            'user_id' => User::factory()->create()->id,
            'alamat' => $this->faker->city(),
            'nama_ayah' => $this->faker->name(),
            'nama_ibu' => $this->faker->name(),
            'tempat_lahir' => $this->faker->city(),
            'tanggal_lahir' => $this->faker->date(),
        ];
    }
}
