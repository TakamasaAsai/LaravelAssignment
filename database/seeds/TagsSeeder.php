<?php

use Illuminate\Database\Seeder;

class TagsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        DB::table('tags')->insert([
            [
                'name' => 'Shopping',
                'created_at' => new DateTime(),
                'updated_at' => new DateTime(),
            ], [
                'name' => 'Diary',
                'created_at' => new DateTime(),
                'updated_at' => new DateTime(),
            ], [
                'name' => 'Restaurant',
                'created_at' => new DateTime(),
                'updated_at' => new DateTime(),
            ]
        ]);
    }
}
