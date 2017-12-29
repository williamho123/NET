<?php

/*
|--------------------------------------------------------------------------
| Model Factories
|--------------------------------------------------------------------------
|
| Here you may define all of your model factories. Model factories give
| you a convenient way to create models for testing and seeding your
| database. Just tell the factory how a default model should look.
|
*/

/** @var \Illuminate\Database\Eloquent\Factory $factory */

$factory->define(App\Admin::class, function () {

    return [
        'firstname' => 'NET',
        'lastname' => 'Admin',
        'username' => env('ADMIN_USERNAME'),
        'email' => env('ADMIN_EMAIL'),
        'password' => bcrypt(env('ADMIN_PASSWORD')),
        'root' => true
    ];
});

// Fill in with dummy data later.
$factory->define(App\Registration::class, function (Faker\Generator $faker) {

    return [
        'data' => json_encode([])
    ];
});

$factory->define(App\Team::class, function () {

    return [
        'team_id_code' => 123456,
        'password' => bcrypt('test'),
        'team_name' => 'Some Team',
        'school' => 'Some High School',
        'registration_id' => 1,
    ];
});

$factory->define(App\Internal::class, function() {

    return [
        'registration_status' => false,
        'registration_ended' => false,
        'registration_open_date' => new DateTime('2018-01-08'),
        'tournament_date' => new DateTime('2018-04-07')
    ];
});
