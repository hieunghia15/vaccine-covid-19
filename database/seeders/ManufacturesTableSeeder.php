<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use DB;

class ManufacturesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('manufactures')->delete();

        DB::table('manufactures')->insert(array(
            0 => array(
                'id' => 1,
                'name' => 'AstraZeneca plc',
                'nation_id' => '1'
            ),
            1 => array(
                'id' => 2,
                'name' => 'Pfizer–BioNTech',
                'nation_id' => '2'
            ),
            2 => array(
                'id' => 3,
                'name' => 'Johnson & Johnson',
                'nation_id' => '2'
            ),
            3 => array(
                'id' => 4,
                'name' => 'Moderna, Inc',
                'nation_id' => '1'
            ),
            4 => array(
                'id' => 5,
                'name' => 'China National Pharmaceutical Group Corporation',
                'nation_id' => '3'
            ),
            5 => array(
                'id' => 6,
                'name' => 'Gamaleya Research Institute of Epidemiology and Microbiology',
                'nation_id' => '4'
            ),
            6 => array(
                'id' => 7,
                'name' => 'Sinovac Biotech',
                'nation_id' => '3'
            ),
            7 => array(
                'id' => 8,
                'name' => 'Novavax, Inc',
                'nation_id' => '2'
            ),
            8 => array(
                'id' => 9,
                'name' => 'Bharat Biotech International Limited',
                'nation_id' => '5'
            ),
            9 => array(
                'id' => 10,
                'name' => 'CanSino Biologics',
                'nation_id' => '3'
            ),
            10 => array(
                'id' => 11,
                'name' => 'Center for Genetic Engineering and Biotechnology',
                'nation_id' => '6'
            ),
            11 => array(
                'id' => 12,
                'name' => 'State Research Center of Virology and Biotechnology VECTOR',
                'nation_id' => '4'
            ),
            12 => array(
                'id' => 13,
                'name' => 'Beijing Institute of Biological Products Co.',
                'nation_id' => '3'
            ),
        ));
    }
}