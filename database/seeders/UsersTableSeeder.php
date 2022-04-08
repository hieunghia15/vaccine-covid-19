<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use DB;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('users')->delete();

        DB::table('users')->insert(array(
            0 =>
            array(
                'id' => 1,
                'phone' => '0912345678',
                'fullname' => 'Admin',
                'birthday' => NULL,
                'gender' => NULL,
                'address' => NULL,
                'identification' => NULL,
                'ward_id' => NULL,
                'email' => NULL,
                'email_verified_at' => NULL,
                'password' => '$2y$10$oX71yEHU5nZYIy2p/.sdW.AmNELulUJ97DhUJtotgTQxAZLs.BHba',
                'remember_token' => NULL,
                'created_at' => NULL,
                'updated_at' => NULL
            ),
            1 =>
            array(
                'id' => 2,
                'phone' => '0912345679',
                'fullname' => 'Vaccination Administrator',
                'birthday' => NULL,
                'gender' => NULL,
                'address' => NULL,
                'identification' => NULL,
                'ward_id' => NULL,
                'email' => NULL,
                'email_verified_at' => NULL,
                'password' => '$2y$10$Fys6aA0HU/DQyGRgdHzAQOxLvoot4oglcVuEuczNqEYAS.EuTfG1C',
                'remember_token' => NULL,
                'created_at' => NULL,
                'updated_at' => NULL
            ),
            2 =>
            array(
                'id' => 3,
                'phone' => '0912345670',
                'fullname' => 'Citizen',
                'birthday' => NULL,
                'gender' => NULL,
                'address' => NULL,
                'identification' => NULL,
                'ward_id' => NULL,
                'email' => NULL,
                'email_verified_at' => NULL,
                'password' => '$2y$10$uIYmqhqEx/LNGH1STwCvs.9KPa63dmYx9P6ZhLY.MrTU0jfgCNxFu',
                'remember_token' => NULL,
                'created_at' => NULL,
                'updated_at' => NULL
            ),
        ));
    }
}