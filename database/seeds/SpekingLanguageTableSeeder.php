<?php

use Illuminate\Database\Seeder;

class SpekingLanguageTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('speaking_languages')->insert([
            [
                'language' => 'English',
                'slug' => 'english',
                'is_active'=>1,
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'language' => 'German',
                'slug' => 'german',
                'is_active'=>1,
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
        ]);
    }
}
