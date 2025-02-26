<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use \App\Models\User;
use \App\Models\Board;
class BoardFactory extends Factory
{
    protected $model = Board::class;

    public function definition()
    {
        return [
            'title' => $this->faker->sentence(3),
            'background_image' => $this->faker->imageUrl(),
            'user_id' => \App\Models\User::factory()
        ];
    }
}
