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
        DB::table('users')->insert([
            'email' => 'Administrator@gmail.com',
            'password' => bcrypt('123456'),
            'name' => 'Administrator',
            'avatar' => 'avatar-default.jpg',
            'status' => 1,
            'permission_id' => 1
        ]);
    }
}
