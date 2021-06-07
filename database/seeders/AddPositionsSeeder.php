<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use App\Models\Project;


class AddPositionsSeeder extends Seeder
{
    static $positions = [
        'Начальник',
        'Диспетчер',
    ];
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        foreach (self::$positions as $position) {
            DB::table('positions')->insert([
                'title' => $position,
            ]);
    }
}
}