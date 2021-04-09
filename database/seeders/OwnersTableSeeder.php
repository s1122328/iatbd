<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use DB;
class OwnersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('owners')->insert([
            'name' => "horse",
            'owned_product' => "Schroevendraaier",
            ]);
    }
}