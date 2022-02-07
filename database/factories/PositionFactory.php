<?php

namespace Database\Factories;

use App\Models\User;
use Illuminate\Database\Eloquent\Factories\Factory;

class PositionFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        $firstAdminID = User::first()->id;

        return [
            'title' => $this->faker->randomElement([
                'Backend developer',
                'Frontend developer',
                'Lead designer',
                'Leading specialist of the Control Department',
                'Contextual advertising specialist',
            ]),
            'admin_created_id' => $firstAdminID,
            'admin_updated_id' => $firstAdminID,
        ];
    }
}
