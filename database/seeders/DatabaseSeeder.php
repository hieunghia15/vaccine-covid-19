<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        $this->call(UsersTableSeeder::class);
        $this->call(ProvincesTableSeeder::class);
        $this->call(DistrictsTableSeeder::class);
        $this->call(WardsTableSeeder::class);
        $this->call(RoleTableSeeder::class);
        $this->call(ModelHasRoleTableSeeder::class);
        $this->call(NationTableSeeder::class);
        $this->call(CategoriesTableSeeder::class);
        $this->call(ManufacturesTableSeeder::class);
        $this->call(MedicalsTableSeeder::class);
        $this->call(Priority_GroupsTableSeeder::class);
        $this->call(VaccinationTypesTableSeeder::class);
        $this->call(VaccinationSitesTableSeeder::class);
        $this->call(PostsTableSeeder::class);
    }
}