<?php

use Illuminate\Database\Seeder;
use Illuminate\Database\Eloquent\Model;

class DatabaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Model::unguard();

        $this->call(UserRoleSeeder::class);
        $this->call(CountryTableSeeder::class);
        $this->call(CityTableSeeder::class);
        $this->call(KeySkillTableSeeder::class);
        $this->call(ActivityTableSeeder::class);
        $this->call(SpekingLanguageTableSeeder::class);

        Model::reguard();
    }
}
