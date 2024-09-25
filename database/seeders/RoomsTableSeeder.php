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
            'room_ID' => 'B1201',
            'roomtype_ID' => 'B-1',
            'room_Num' => '201',
        ];
        DB::table('rooms')->insert($param);

        $param = [
            'room_ID' => 'B1202',
            'roomtype_ID' => 'B-1',
            'room_Num' => '202',
        ];
        DB::table('rooms')->insert($param);

        $param = [
            'room_ID' => 'B1203',
            'roomtype_ID' => 'B-1',
            'room_Num' => '203',
        ];
        DB::table('rooms')->insert($param);

        
        // デラックスルーム
        $param = [
            'room_ID' => 'D1301',
            'roomtype_ID' => 'D-1',
            'room_Num' => '301',
        ];
        DB::table('rooms')->insert($param);

        $param = [
            'room_ID' => 'D1302',
            'roomtype_ID' => 'D-1',
            'room_Num' => '302',
        ];
        DB::table('rooms')->insert($param);

        
        // プレミアムルーム
        $param = [
            'room_ID' => 'P1501',
            'roomtype_ID' => 'P-1',
            'room_Num' => '501',
        ];
        DB::table('rooms')->insert($param);

        $param = [
            'room_ID' => 'P1502',
            'roomtype_ID' => 'P-1',
            'room_Num' => '502',
        ];
        DB::table('rooms')->insert($param);
    }
}
