<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;

class SilabusFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'mata_pelajaran' => $this->faker->name(),
            'tahun_ajar' => $this->faker->year(),
            'kelas' => Str::between('1', '2', '3'),
            'link' => 'silabus/contoh.pdf'
        ];
    }
}
