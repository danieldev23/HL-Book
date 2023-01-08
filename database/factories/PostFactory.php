<?php

namespace Database\Factories;
use Illuminate\Support\Facades\Auth;

use Illuminate\Database\Eloquent\Factories\Factory;

class PostFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'user_id' => Auth::user()->id
        ];
    }
}
