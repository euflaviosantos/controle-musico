<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('users')->insert(
            ['id' => '1',
            'email' => 'flawinhoh@gmail.com',
            'password' => '$2y$10$FC45yBw.NtlZJYjPmofOUOPT.8W.feT6Hyie5eLHc3SgJOaeK6GxW',
            'created_at' => '2017-04-23 14:38:29',
            'updated_at' => '2017-04-23 14:38:29']
        );
    }
}