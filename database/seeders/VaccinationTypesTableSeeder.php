<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use DB;

class VaccinationTypesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('vaccination_types')->delete();

        DB::table('vaccination_types')->insert(array(
            0 =>
            array(
                'id' => 1,
                'name' => 'COVID-19 Vaccine AstraZeneca',
                'applicable_age' => 'Trên 18 tuổi',
                'effection' => '70% -82%',
                'injection_dose' => '3 mũi',
                'injection_time' => 'Cách 4-6 tuần',
                'manufacture_id' => '1',
                'created_at' => '2022-03-27 08:31:41',
                'updated_at' => '2022-03-27 08:31:41'
            ),
            1 =>
            array(
                'id' => 2,
                'name' => 'COVID-19 Vaccine Gam-COVID-Vac (SputnikV)',
                'applicable_age' => 'Trên 18 tuổi',
                'effection' => '91%',
                'injection_dose' => '2 mũi',
                'injection_time' => 'Cách 3 tuần',
                'manufacture_id' => '6',
                'created_at' => '2022-03-27 08:33:06',
                'updated_at' => '2022-03-27 08:33:06'
            ),
            2 =>
            array(
                'id' => 3,
                'name' => 'COVID-19 Vaccine Janssen (Johnson & Johnson)',
                'applicable_age' => 'Trên 18 tuổi',
                'effection' => '70%',
                'injection_dose' => '1 mũi',
                'injection_time' => 'Không có',
                'manufacture_id' => '3',
                'created_at' => '2022-03-27 08:34:15',
                'updated_at' => '2022-03-27 08:34:15'
            ),
            3 =>
            array(
                'id' => 4,
                'name' => 'COVID-19 Vaccine Moderna (Spikevax )',
                'applicable_age' => 'Trên 18 tuổi',
                'effection' => '94%',
                'injection_dose' => '2 mũi',
                'injection_time' => 'Cách 4 tuần',
                'manufacture_id' => '4',
                'created_at' => '2022-03-27 08:35:42',
                'updated_at' => '2022-03-27 08:35:42'
            ),
            4 =>
            array(
                'id' => 5,
                'name' => 'COVID-19 Vaccine Comirnaty (Pfizer – BioNTech)',
                'applicable_age' => 'Trên 16 tuổi',
                'effection' => '81%-95%',
                'injection_dose' => '2 mũi',
                'injection_time' => 'Cách 3 tuần',
                'manufacture_id' => '2',
                'created_at' => '2022-03-27 08:36:50',
                'updated_at' => '2022-03-27 08:36:50'
            ),
            5 =>
            array(
                'id' => 6,
                'name' => 'COVID-19 Vaccine (Vero Cell), Inactived (Sinopharm)',
                'applicable_age' => 'Từ 18-60 tuổi',
                'effection' => '79%',
                'injection_dose' => '2 mũi',
                'injection_time' => 'Cách 3-4 tuần',
                'manufacture_id' => '5',
                'created_at' => '2022-03-27 08:39:04',
                'updated_at' => '2022-03-27 08:39:04'
            ),
            6 =>
            array(
                'id' => 7,
                'name' => 'COVID-19 Vaccine Hayat-Vax',
                'applicable_age' => 'Trên 18 tuổi',
                'effection' => '79%',
                'injection_dose' => '2 mũi',
                'injection_time' => 'Cách 2-4 tuần',
                'manufacture_id' => '13',
                'created_at' => '2022-03-27 08:42:00',
                'updated_at' => '2022-03-27 08:45:54'
            ),
            7 =>
            array(
                'id' => 8,
                'name' => 'COVID-19 Vaccine Abdala',
                'applicable_age' => 'Từ 19-65 tuổi',
                'effection' => '92%',
                'injection_dose' => '3 mũi',
                'injection_time' => 'Cách 2 tuần',
                'manufacture_id' => '11',
                'created_at' => '2022-03-27 08:43:53',
                'updated_at' => '2022-03-27 08:43:53'
            ),
        ));
    }
}