<?php

namespace Database\Seeders;

use App\Models\Employee;
use App\Models\Position;
use App\Models\User;
use Illuminate\Database\Seeder;
use Faker\Factory;

class EmployeesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $faker = Factory::create();

        $firstAdminID = User::first()->id;

        Employee::create([
            'full_name' => $faker->name,
            'position_id' => Position::first()->id,
            'hired_at' => '2022-'.$faker->date('m-d'),
            'phone_number' => $faker->numerify('+380 (##) ### ## ##'),
            'email' => $faker->unique()->email(),
            'salary' => $faker->numberBetween('0', '50000'),
            'path_to_photo' => '/img/profile/'.$faker->numberBetween(1, 4).'.jpg',
            'admin_created_id' => $firstAdminID,
            'admin_updated_id' => $firstAdminID,
        ]);

        Employee::factory()->count(250)->create();
    }
}
