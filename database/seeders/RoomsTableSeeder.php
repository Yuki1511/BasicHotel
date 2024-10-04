<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;


class RoomsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        // Basicルーム
        $param = [
            'room_id' => 'B1201',
            'roomtype_roomtype_id' => 'B-1',
            'room_Num' => '201',
        ];
        DB::table('rooms')->insert($param);

        $param = [
            'room_id' => 'B1202',
            'roomtype_roomtype_id' => 'B-1',
            'room_Num' => '202',
        ];
        DB::table('rooms')->insert($param);

        $param = [
            'room_id' => 'B1203',
            'roomtype_roomtype_id' => 'B-1',
            'room_Num' => '203',
        ];
        DB::table('rooms')->insert($param);

        
        // デラックスルーム
        $param = [
            'room_id' => 'D1301',
            'roomtype_roomtype_id' => 'D-1',
            'room_Num' => '301',
        ];
        DB::table('rooms')->insert($param);

        $param = [
            'room_id' => 'D1302',
            'roomtype_roomtype_id' => 'D-1',
            'room_Num' => '302',
        ];
        DB::table('rooms')->insert($param);

        
        // プレミアムルーム
        $param = [
            'room_id' => 'P1501',
            'roomtype_roomtype_id' => 'P-1',
            'room_Num' => '501',
        ];
        DB::table('rooms')->insert($param);

        $param = [
            'room_id' => 'P1502',
            'roomtype_roomtype_id' => 'P-1',
            'room_Num' => '502',
        ];
        DB::table('rooms')->insert($param);
    }
}
