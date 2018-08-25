<?php

use jeremykenedy\LaravelRoles\Models\Role;
use App\Models\Category;
use App\Models\Mission;
use App\Models\Library;
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

/* @var \Illuminate\Database\Eloquent\Factory $factory */

$factory->define(App\Models\User::class, function (Faker\Generator $faker) {
    static $password;
    $userRole = Role::whereName('User')->first();

    return [
        'name'                           => $faker->unique()->userName,
        'first_name'                     => $faker->firstName,
        'last_name'                      => $faker->lastName,
        'email'                          => $faker->unique()->safeEmail,
        'password'                       => $password ?: $password = bcrypt('secret'),
        'token'                          => str_random(64),
        'activated'                      => true,
        'remember_token'                 => str_random(10),
        'signup_ip_address'              => $faker->ipv4,
        'signup_confirmation_ip_address' => $faker->ipv4,
        'created_at'                     => $faker->dateTimeBetween('-3 years', 'now'),
        'updated_at'                     => $faker->dateTimeBetween('-3 years', 'now'),
    ];
});


$factory->define(App\Models\Profile::class, function (Faker\Generator $faker) {
    return [
        'user_id'          => factory(App\Models\User::class)->create()->id,
        'theme_id'         => 1,
        'location'         => $faker->streetAddress,
        'bio'              => $faker->paragraph(2, true),
        'twitter_username' => $faker->userName,
        'github_username'  => $faker->userName,
    ];
});

$factory->define(App\Models\MCategory::class, function (Faker\Generator $faker) {
        $name = $faker->word;
    return [
        'name'          => $name,
        'description'   => $faker->paragraph,
        'slug'          => str_slug($name),
    ];
});

$factory->define(App\Models\Library::class, function (Faker\Generator $faker) {
    $name = $faker->unique()->word;
    return [
        'category_id'   => $faker->numberBetween(10,13),
        'name'          => $name,
        'description'   => $faker->paragraph,
        'img_url'       => $faker->imageUrl(300, 300),
        'slug'          => str_slug($name),
        'type'          => $faker->randomElement(['articles', 'tutorials', 'tools', 'ebooks']),
    ];
});

$factory->define(App\Models\Mission::class, function (Faker\Generator $faker) {
        $name = $faker->unique()->word;
    return [
        'category_id'   => $faker->numberBetween(1,9),
        'name'          => $name,
        'description'   => $faker->streetAddress,
        'level'         => $faker->randomElement(['easy', 'normal', 'hard', 'insane']),
        'img_url'       => $faker->imageUrl(300, 300),
        'slug'          => str_slug($name),
        'reward'          => $faker->numberBetween(100, 1000),
        'password'          => $faker->word,
    ];
});

$factory->define(App\Models\Point::class, function(Faker\Generator $faker) {
    return [      
            'user_id'          => $faker->numberBetween(1, 150),
            'points'           => $faker->numberBetween(100, 10000),
            'reason'           => 'testing',
            'dir'              => $faker->randomElement(['add', 'sub']),
        ];
});

