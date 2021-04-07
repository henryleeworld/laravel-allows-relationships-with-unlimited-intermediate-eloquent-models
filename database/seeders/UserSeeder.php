<?php

namespace Database\Seeders;

use App\Models\User;
use Carbon\Carbon;
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
        User::insert([
            ['id' => 11, 'country_id' => 1, 'deleted_at' => null],
            ['id' => 12, 'country_id' => 1, 'deleted_at' => null],
            ['id' => 13, 'country_id' => 1, 'deleted_at' => Carbon::yesterday()],
            ['id' => 14, 'country_id' => 2, 'deleted_at' => null]
        ]);
    }
}
