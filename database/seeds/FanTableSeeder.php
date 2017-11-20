<?php

use Illuminate\Database\Seeder;

class FanTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory(\App\Models\Fan::class, 20)->create();
    }
}
