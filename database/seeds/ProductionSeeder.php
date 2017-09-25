<?php

use Illuminate\Database\Seeder;

class ProductionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run() {

        factory(App\Admin::class)->create();
        factory(App\Internal::class)->create();
    }
}
