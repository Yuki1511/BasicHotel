<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class RoomtypesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $param = [
            'roomtype_ID' => 'B-1',
            'room_name' => 'Basicルーム（ツイン）',
            'max_num_people' => '3',
            'room_value' => '20000',
        ];
        DB::table('roomtypes')->insert($param);
        
        $param = [
            'roomtype_ID' => 'D-1',
            'room_name' => 'デラックスルーム（ツイン）',
            'max_num_people' => '2',
            'room_value' => '40000',
        ];
        DB::table('roomtypes')->insert($param);

        $param = [
            'roomtype_ID' => 'P-1',
            'room_name' => 'プレミアムルーム（ツイン）',
            'max_num_people' => '2',
            'room_value' => '50000',
        ];
        DB::table('roomtypes')->insert($param);
    }
}

