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
$factory->define(App\User::class, function (Faker\Generator $faker) {
    static $password;

    return [
        'name' => $faker->name,
        'email' => $faker->unique()->safeEmail,
        'password' => $password ?: $password = bcrypt('secret'),
        'remember_token' => str_random(10),
    ];
});

$factory->define(App\CodigosPostales::class, function (Faker\Generator $faker) {
    return [
        'id_estado' => $faker->randomDigitNotNull,
        'estado' => $faker->state,
        'id_municipio' => $faker->randomDigitNotNull,
        'municipio' => $faker->country,
        'ciudad' => $faker->city,
        'zona' => $faker->city,
        'codigo_postal' => $faker->postcode,
        'asentamiento' => $faker->streetAddress,
        'tipo' => $faker->citySuffix
    ];
});

/** @var \Illuminate\Database\Eloquent\Factory $factory */
$factory->define(App\Regions::class, function (Faker\Generator $faker) {
    return [
        'region_name' => $faker->city,
        'region_description' => $faker->text(140)
    ];
});

$factory->define(App\RoomsType::class, function (Faker\Generator $faker) {
    return [
        'type_name' => $faker->city,
        'type_description' => $faker->text(140)
    ];
});


$factory->define(App\Services::class, function (Faker\Generator $faker) {
    return [
        'service_name' => $faker->company,
        'service_description' => $faker->bs()
    ];
});

$factory->define(App\Categoria::class, function (Faker\Generator $faker) {
    return [
        'nombre_categoria' => $faker->company,
        'descripcion' => $faker->bs()
    ];
});

$factory->define(App\Imagenes::class, function (Faker\Generator $faker) {
    return [
        'imagen' => $faker->imageUrl(640,480),
        'tipo' => 'png'
    ];
});

$factory->define(App\Producto::class, function (Faker\Generator $faker) {
    return [
        'id_categoria' => factory('App\Categoria')->create()->id,
        'id_imagen' => factory('App\Imagenes')->create()->id,
        'nombre_producto' => $faker->name,
        'descripcion' => $faker->text(70),
        'unidad_en_existencia' => $faker->randomNumber,
        'precio_coste' => $faker->randomFloat(2,5,4),
        'precio_venta' => $faker->randomFloat(2,2,4),
        'autorizacion' => true,
        'barcode' => $faker->ean13
    ];
});

