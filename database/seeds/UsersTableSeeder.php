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
        //
        DB::table('users')->insert([
            'name' => 'Sonya',
            'email' => 'sonya07@ptd.net',
            'password' => bcrypt('klingon07')
        ]);

        DB::table('users')->insert([
            'name' => 'Bob',
            'email' => 'bob@ptd.net',
            'password' => bcrypt('bob07')
        ]);
    }
}
