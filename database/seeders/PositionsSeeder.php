<?php

namespace Database\Seeders;

use App\Models\Position;
use App\Models\User;
use Illuminate\Database\Seeder;

class PositionsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $firstAdminID = User::first()->id;

        Position::create([
            'title' => 'Head',
            'admin_created_id' => $firstAdminID,
            'admin_updated_id' => $firstAdminID,
        ]);

        Position::factory()->count(250)->create();
    }
}
