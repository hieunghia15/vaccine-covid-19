<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use DB;

class NationTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('nations')->delete();

        DB::table('nations')->insert(array(
            0 =>
            array(
                'id' => 1,
                'name' => 'Anh',
            ),
            1 =>
            array(
                'id' => 2,
                'name' => 'Mỹ',
            ),
            2 =>
            array(
                'id' => 3,
                'name' => 'Trung Quốc',
            ),
            3 =>
            array(
                'id' => 4,
                'name' => 'Nga',
            ),
            4 =>
            array(
                'id' => 5,
                'name' => 'Ấn Độ',
            ),
            5 =>
            array(
                'id' => 6,
                'name' => 'Cuba',
            ),
            6 =>
            array(
                'id' => 7,
                'name' => 'Kazakhstan',
            ),
            7 =>
            array(
                'id' => 8,
                'name' => 'Iran',
            ),
            8 =>
            array(
                'id' => 9,
                'name' => 'Đài Loan',
            ),
            9 =>
            array(
                'id' => 10,
                'name' => 'Thổ Nhĩ Kỳ',
            ),
            10 =>
            array(
                'id' => 11,
                'name' => 'Các Tiểu Vương Quốc Ả Rập Thống Nhất',
            ),
            11 =>
            array(
                'id' => 12,
                'name' => 'Canada',
            ),
        ));
    }
}