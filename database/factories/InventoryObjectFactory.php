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
use Scool\Inventory\Models\Inventory;

$factory->define(Inventory::class, function (Faker\Generator $faker) {
    return [
        'id'                       => $faker->randomDigit,
        'id_public'                => $faker->randomDigit,
        'id_extern'                => $faker->randomDigit,
        'tipus'                    => $faker->sentence,
        'name'                     => $faker->sentence,
        'description'              => $faker->sentence,
        'parent_object_id'         => $faker->randomDigit,
        'material_type_id'         => $faker->sentence,
        'brand_id'                 => $faker->randomDigit,
        'model_id'                 => $faker->randomDigit,
        'location_id'              => $faker->randomDigit,
        'quantity'                 => $faker->randomDigit,
        'price'                    => $faker->sentence,
        'money_source_id'          => $faker->randomDigit,
        'provider_id'              => $faker->randomDigit,
        'preservation_state'       => $faker->sentece,
        'study_id'                 => $faker->randomDigit,
        'mainOrganizationalUnitId' => $faker->randomDigit,
        'Timestamps'               => $faker->sentence,
        'userstamps'               => $faker->sentence,

    ];
});
