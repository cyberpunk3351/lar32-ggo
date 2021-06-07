<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Faker\Factory as Faker;

class MakeDrummerUserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $faker = Faker::create();

            DB::table('users')->insert([
            'name' => 'Drummer',
            'email' => 'drummer.ilya@gmail.com',
            'password' => '$2y$10$FvpuNnG2ZaoKiTc3ynpQvuejggOQF7XrxrmyLRIkiaeIXrrEgyJ5.',
        ]);
    }
}