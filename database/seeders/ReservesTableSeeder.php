<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ReservesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $param = [
            'guest_id' => '1',
            'num_people' => '3',
            'check_in' => '10月30日',
            'check_out' => '10月31日',
        ];
        DB::table('reserves')->insert($param);

        $param = [
            'guest_id' => '2',
            'num_people' => '2',
            'check_in' => '10月31日',
            'check_out' => '11月1日',
        ];
        DB::table('reserves')->insert($param);

        $param = [
            'guest_id' => '3',
            'num_people' => '3',
            'check_in' => '11月11日',
            'check_out' => '11月13日',
        ];
        DB::table('reserves')->insert($param);

        $param = [
            'guest_id' => '5',
            'num_people' => '3',
            'check_in' => '11月2日',
            'check_out' => '11月3日',
        ];
        DB::table('reserves')->insert($param);

        $param = [
            'guest_id' => '3',
            'num_people' => '3',
            'check_in' => '12月15日',
            'check_out' => '12月16日',
        ];
        DB::table('reserves')->insert($param);
    }
}
