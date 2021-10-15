<?php

namespace Database\Factories;

use App\Models\Libros;
use Illuminate\Database\Eloquent\Factories\Factory;

class datosFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Libros::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'id' $this->faker->sentence(), 
            'titulo',
            'autor', 
            'editorial', 
            'fechapub', 
            'numpag'
        ];
    }
}
