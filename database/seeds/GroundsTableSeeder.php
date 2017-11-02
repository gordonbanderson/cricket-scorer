<?php

use Illuminate\Database\Seeder;

class GroundsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory(App\Models\Ground::class, 10)->create();
    }
}
