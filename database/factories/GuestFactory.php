<?php

namespace Database\Factories;
use App\Models\Guest;

use Illuminate\Database\Eloquent\Factories\Factory;

class GuestFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */

    protected $model = Guest::class;

    public function definition()
    {
        return [
        
            'name' => $this->faker->name,
            'approve_type' => $this->faker->approve_type,
            'approve_number' => $this->faker->approve_number,
            'place_of_issue'=> $this->faker->place_of_issue,
            'phone'=> $this->faker->phone,
            'email'=> $this->faker->unique()->safeEmail,
        ];
    }
}
