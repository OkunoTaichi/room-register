<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Room;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        Room::factory(10)->create();
    }
}
