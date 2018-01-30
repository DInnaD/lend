<?php

use Faker\Generator as Faker;

/*
|--------------------------------------------------------------------------
| Model Factories
|--------------------------------------------------------------------------
|
| This directory should contain each of the model factory definitions for
| your application. Factories provide a convenient way to generate new
| model instances for testing / seeding your application's database.
|
*/

$factory->define(App\User::class, function (Faker $faker) {
    return [
        'name' => $faker->name,
        'email' => $faker->unique()->safeEmail,
        'password' => '$2y$10$TKh8H1.PfQx37YgCzwiKb.KjNyWgaHb9cbcoQgdIVFlYg7B77UdFm', // secret
        'remember_token' => str_random(10),
    ];
});
$factory->defineAs(App\User::class, 'admin', function (Faker $faker) {
    return [
        'name' => 'admin',//$faker->name,
        'email' => 'innassik@yahoo.com',//$faker->unique()->safeEmail,
        'password' => bcrypt('123456'),//'$2y$10$TKh8H1.PfQx37YgCzwiKb.KjNyWgaHb9cbcoQgdIVFlYg7B77UdFm', // secret
        'remember_token' => str_random(10),
    ];
});

$factory->defineAs(App\Page::class, 'admin', function (Faker $faker) {
    return [
       'id' => ['1','2','3','4','5','6', '7',],
       'name' => ['Home','About us','Services','Portfolio','Clients','Team','',],
       'alias' => ['home','about us','services','ortfoliosp','clients','team',],
       'text' => ['','','','','','',],
        'images' => ['main_device_image.png','about-ing.png','','','','',],
        'name' => 'admin',//$faker->name,
        'email' => 'innassik@yahoo.com',//$faker->unique()->safeEmail,
        'password' => bcrypt('123456'),//'$2y$10$TKh8H1.PfQx37YgCzwiKb.KjNyWgaHb9cbcoQgdIVFlYg7B77UdFm', // secret
        'remember_token' => str_random(10),
    ];
});
$factory->defineAs(App\People::class, 'admin', function (Faker $faker) {
    return [
       'id' => ['1','2','','','',''],
       'name' => ['','','','','',''],
       'alias' => ['','','','','',''],
       'text' => ['','','','','',''],
        'images' => ['','','','','',''],
        'name' => 'admin',//$faker->name,
        'email' => 'innassik@yahoo.com',//$faker->unique()->safeEmail,
        'password' => bcrypt('123456'),//'$2y$10$TKh8H1.PfQx37YgCzwiKb.KjNyWgaHb9cbcoQgdIVFlYg7B77UdFm', // secret
        'remember_token' => str_random(10),
    ];
});
$factory->defineAs(App\Portfolio::class, 'admin', function (Faker $faker) {
    return [
       'id' => ['1','2','','','',''],
       'name' => ['','','','','',''],
       'alias' => ['','','','','',''],
       'text' => ['','','','','',''],
        'images' => ['','','','','',''],
        'name' => 'admin',//$faker->name,
        'email' => 'innassik@yahoo.com',//$faker->unique()->safeEmail,
        'password' => bcrypt('123456'),//'$2y$10$TKh8H1.PfQx37YgCzwiKb.KjNyWgaHb9cbcoQgdIVFlYg7B77UdFm', // secret
        'remember_token' => str_random(10),
    ];
    $factory->defineAs(App\Service::class, 'admin', function (Faker $faker) {
    return [
       'id' => ['1','2','3','4','5','6'],
       'name' => ['','','','','',''],
       'alias' => ['','','','','',''],
       'text' => ['','','','','',''],
        'images' => ['','','','','',''],
        'name' => 'admin',//$faker->name,
        'email' => 'innassik@yahoo.com',//$faker->unique()->safeEmail,
        'password' => bcrypt('123456'),//'$2y$10$TKh8H1.PfQx37YgCzwiKb.KjNyWgaHb9cbcoQgdIVFlYg7B77UdFm', // secret
        'remember_token' => str_random(10),
    ];
});
});
