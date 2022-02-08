<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\User_data; 
class User_dataSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        User_data::factory(10)->create();
    }
}
