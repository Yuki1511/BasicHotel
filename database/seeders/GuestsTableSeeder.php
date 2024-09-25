<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class GuestsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $param = [
            'name' => '山田たろう',
            'address' => '東京都港区芝公園',
            'tell' => '09011112222',
        ];
        DB::table('guests')->insert($param);

        $param = [
            'name' => '奈良はなこ',
            'address' => '北海道札幌市中央区北一条西',
            'tell' => '09033334444',
        ];
        DB::table('guests')->insert($param);

        $param = [
            'name' => '佐藤あいこ',
            'address' => '愛知県名古屋市中区栄',
            'tell' => '09055556666',
        ];
        DB::table('guests')->insert($param);

        $param = [
            'name' => '鈴木たかし',
            'address' => '大阪府大阪市北区梅田',
            'tell' => '09077778888',
        ];
        DB::table('guests')->insert($param);

        $param = [
            'name' => '阿部まりあ',
            'address' => '福岡県福岡市中央区天神',
            'tell' => '09012345678',
        ];
        DB::table('guests')->insert($param);

    }
}
