<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run() {

        factory(App\Admin::class)->create();
        factory(App\Registration::class)->create();
        factory(App\Team::class)->create();
        factory(App\Internal::class)->create();
    }
}
