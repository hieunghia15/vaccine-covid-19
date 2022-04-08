<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use DB;

class CategoriesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('categories')->delete();

        DB::table('categories')->insert(array(
            0 => array(
                'id' => 1,
                'name' => 'Bản tin Covid-19',
                'category_slug' => 'ban-tin-covid-19'
            ),
            1 => array(
                'id' => 2,
                'name' => 'Vắc xin',
                'category_slug' => 'vac-xin'
            ),
            2 => array(
                'id' => 3,
                'name' => 'Tiêm chủng',
                'category_slug' => 'tiem-chung'
            ),
            3 => array(
                'id' => 4,
                'name' => 'Tình hình thế giới',
                'category_slug' => 'tinh-hinh-the-gioi'
            ),
        ));
    }
}