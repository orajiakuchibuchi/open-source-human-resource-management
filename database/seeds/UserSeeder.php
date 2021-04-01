<?php

use Illuminate\Database\Seeder;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        \DB::table('users')->insert([
            'name' => 'HR Manager',
            'email' => 'hrm@manager.com',
            'password' => bcrypt('123456'),
        ]);
    }
}
