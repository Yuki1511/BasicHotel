<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;

use App\Models\Detail;
use App\Models\Reserve;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        $this->call(RoomtypesTableSeeder::class);
        $this->call(RoomsTableSeeder::class);
        $this->call(GuestsTableSeeder::class);
        $this->call(ReservesTableSeeder::class);
        $this->call(DetailsTableSeeder::class);
    }
}
