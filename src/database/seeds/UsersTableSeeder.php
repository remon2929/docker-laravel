<?php

use Illuminate\Database\Seeder;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('users')->insert([
            [
              'name' => 'うさぎ',
              'id' => '1',
              'email'=>'remonre_tatatat@yahoo.co.jp',
              'password'=>'remon2929'
             
            ],
            [
                'name' => 'たぬき',
                'id' => '2',
                'email'=>'abddd_adafa@yahoo.co.jp',
                'password'=>'remon1123'
            ],
            [
                'name' => 'うなぎ',
                'id' => '3',
                'email'=>'afsdgalsk_fsaijda@yahoo.co.jp',
                'password'=>'remon11234'
            ],
          ]);
    }
}
