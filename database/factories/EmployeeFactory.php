<?php

namespace Database\Factories;

use App\Models\Employee;
use App\Models\Position;
use App\Models\User;
use Illuminate\Database\Eloquent\Factories\Factory;

class EmployeeFactory extends Factory
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
            'full_name' => $this->faker->name,
            'position_id' => Position::inRandomOrder()->first()->id,
            'employee_id' => Employee::first()->id,
            'hired_at' => '2022-'.$this->faker->date('m-d'),
            'phone_number' => $this->faker->numerify('+380 (##) ### ## ##'),
            'email' => $this->faker->unique()->email(),
            'salary' => $this->faker->numberBetween('0', '50000'),
            'path_to_photo' => '/img/profile/'.$this->faker->numberBetween(1, 4).'.jpg',
            'admin_created_id' => $firstAdminID,
            'admin_updated_id' => $firstAdminID,
        ];
    }
}
