<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class DetailsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $param = [
            'reserve_id' => '1',
            'room_room_id' => 'B1201',
            'days' => '2024/10/30',
            'price' => '20000',
        ];
        DB::table('reserves')->insert($param);

        $param = [
            'reserve_id' => '2',
            'room_room_id' => 'P1501',
            'days' => '2024/10/31',
            'price' => '50000',
        ];
        DB::table('reserves')->insert($param);

        $param = [
            'reserve_id' => '3',
            'room_room_id' => 'B1202',
            'days' => '2024/11/11',
            'price' => '20000',
        ];
        DB::table('reserves')->insert($param);

        $param = [
            'reserve_id' => '4',
            'room_room_id' => 'B1203',
            'days' => '2024/11/2',
            'price' => '20000',
        ];
        DB::table('reserves')->insert($param);

        $param = [
            'reserve_id' => '5',
            'room_room_id' => 'B1201',
            'days' => '2024/12/15',
            'price' => '20000',
        ];
        DB::table('reserves')->insert($param);
    }
}

