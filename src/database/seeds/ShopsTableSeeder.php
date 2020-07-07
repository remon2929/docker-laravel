<?php

use Illuminate\Database\Seeder;

class ShopsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('shops')->insert([
          [
            'name' => '末廣',
            'address' => '秋田市新屋',
            'category_id' => 1,
          ],
          [
            'name' => 'チャイナタウン',
            'address' => '秋田市牛島西',
            'category_id' => 2,
          ],
          [
            'name' => '八谷',
            'address' => '秋田市手形',
            'category_id' => 3,
          ],
        ]);
      }
}
