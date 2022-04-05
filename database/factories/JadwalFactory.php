<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

class JadwalFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'judul' => $this->faker->sentence(mt_rand(2,8)),
            'judulslug' =>$this->faker->slug(),
            'tanggal' =>$this->faker->dateTimeThisYear(),
            'waktu' =>$this->faker->time(),
            'pemohon' =>$this->faker->name(),
            'termohon' =>$this->faker->name(),
            'nomor_register' =>$this->faker->lexify('id-????'),
            'majelis' =>$this->faker->name(),
            'panitera' =>$this->faker->name(),
            'ruangan' =>'Ruang Sidang KISB',
            'mediator' =>$this->faker->name(),
            'agenda' =>$this->faker->sentence(mt_rand(2,8))



        ];
    }
}
