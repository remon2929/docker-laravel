<?php

use Illuminate\Database\Seeder;

class CategoriesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $names = ['イタリアン', '中華', '和食'];

        foreach ($names as $name) {
            DB::table('categories')->insert([
                'name' => $name
            ]);
        }
    }
}
