<?php

use Illuminate\Database\Seeder;

class ZanTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory(\App\Models\Zan::class, 20)->create();
    }
}
