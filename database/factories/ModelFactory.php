<?php
use App\{User,Course};
//use Faker\Generator as Faker;
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

$factory->define(App\User::class, function (Faker\Generator $faker) {
    return [
        'name' => $faker->name,
        'email' => $faker->email,
    ];
});


//$factory->define(Course::class, function (Faker $faker) {
    //$factory->define(App\Models\Admin::class, function (Faker $faker) 
$factory->define(App\Course::class, function (Faker\Generator $faker) {

    return [
        'nome'      => $faker->sentence,
        'descricao' => $faker->sentence,
        'conteudo'  => $faker->paragraph,
        'preco'     => $faker->randomFloat(2, 0, 10)

    ];
});
