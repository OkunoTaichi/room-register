<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use App\Models\room;

class RoomFactory extends Factory
{
     /**
     * The name of the factory's corresponding model.
     *
     * 
     */
    protected $model = Room::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'room_id' => $this->faker->numberBetween(1, 100) ,
            'title' => $this->faker->name(),
            'people' => $this->faker->numberBetween(1, 6) ,
            'content' => $this->faker->realText(100),
        ];
    }
}
