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
            [
                'name' => 'root',
                'email' => 'root@gmail.com',
                'password' => Hash::make('password'),
            ], [
                'name' => 'Test',
                'email' => 'test2@gmail.com',
                'password' => Hash::make('password123'),
            ], [
                'name' => 'admin',
                'email' => 'admin2@gmail.com',
                'password' => Hash::make('password123'),
            ]
        ]);
    }
}
