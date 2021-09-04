<?php

namespace Database\Factories;

use App\Models\questions;
use Illuminate\Database\Eloquent\Factories\Factory;

class questionsFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = questions::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
               //generate titles as senstence for post
               'title'=>$this->faker->sentence(),
               //generate bodies as paragarph for post
               'descrition'=>$this->faker->paragraph(),
           

        ];
    }
}
