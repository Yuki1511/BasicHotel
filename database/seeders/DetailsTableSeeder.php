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
            'reservation_details_ID' => '',
            'reserve_ID' => '',
            'room_ID' => '',
            'days' => '',
            'price' => '',
        ];
        DB::table('reserves')->insert($param);

        $param = [
            'reservation_details_ID' => '',
            'reserve_ID' => '',
            'room_ID' => '',
            'days' => '',
            'price' => '',
        ];
        DB::table('reserves')->insert($param);

        $param = [
            'reservation_details_ID' => '',
            'reserve_ID' => '',
            'room_ID' => '',
            'days' => '',
            'price' => '',
        ];
        DB::table('reserves')->insert($param);

        $param = [
            'reservation_details_ID' => '',
            'reserve_ID' => '',
            'room_ID' => '',
            'days' => '',
            'price' => '',
        ];
        DB::table('reserves')->insert($param);

        $param = [
            'reservation_details_ID' => '',
            'reserve_ID' => '',
            'room_ID' => '',
            'days' => '',
            'price' => '',
        ];
        DB::table('reserves')->insert($param);
    }
}

