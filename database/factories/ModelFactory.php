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

$factory->define(App\Registration::class, function (Faker\Generator $faker) {

    $grades = ['Freshman', 'Sophomore', 'Junior', 'Senior'];

    return [
        'data' => json_encode([
            'team_captain' => [
                'name' => $faker->name,
                'grade' => $grades[array_rand($grades)],
                'email' => $faker->safeEmail
            ],
            'team_member_1' => [
                'name' => $faker->name,
                'grade' => $grades[array_rand($grades)],
                'email' => $faker->safeEmail
            ],
            'team_member_2' => [
                'name' => $faker->name,
                'grade' => $grades[array_rand($grades)],
                'email' => $faker->safeEmail
            ],
            'team_member_3' => [
                'name' => $faker->name,
                'grade' => $grades[array_rand($grades)],
                'email' => $faker->safeEmail
            ],
            'advisor' => [
                'name' => $faker->name,
                'email' => $faker->safeEmail,
                'relationship' => $faker->sentence('2')
            ],
            'numbers' => [
                'advisor' => $faker->randomNumber(3) . $faker->randomNumber(3) . $faker->randomNumber(4),
                'team_captain' =>  $faker->randomNumber(3) . $faker->randomNumber(3) . $faker->randomNumber(4)
            ],
            'econ_exp' => true,
            'econ_back' => $faker->sentence(15),
            'short_answer' => $faker->sentence(25)
        ])
    ];
});

$factory->define(App\Team::class, function (Faker\Generator $faker) {

    return [
        'team_id_code' => $faker->randomNumber(6),
        'password' => bcrypt('password'),
        'team_name' => $faker->sentence(3),
        'school' => $faker->sentence(4),
        'registration_id' => function () {
            return factory(App\Registration::class)->create()->id;
        }
    ];
});

$factory->define(App\Internal::class, function() {

    return [
        'registration_status' => false,
        'registration_ended' => false,
        'registration_open_date' => new DateTime('2018-01-16'),
        'tournament_date' => new DateTime('2018-04-07'),
        'registration_end_date' => new DateTime('2018-02-23')
    ];
});
