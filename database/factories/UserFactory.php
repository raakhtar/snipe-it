<?php

use App\Models\Company;

$factory->define(App\Models\User::class, function (Faker\Generator $faker) {
    return [
        'first_name' => $faker->firstName,
        'last_name' => $faker->lastName,
        'username' => $faker->username,
        'password' => $faker->password,
        'permissions' => '{"user":"0"}',
        'email' => $faker->safeEmail,
        'company_id' => function () {
                return factory(App\Models\Company::class)->create()->id;
        },
        'locale' => $faker->locale,
        'employee_num' => $faker->numberBetween(3500, 35050),
        'jobtitle' => $faker->word,
        'phone' => $faker->phoneNumber,
        'notes' => $faker->sentence,
        'location_id' => function () {
            return factory(App\Models\Location::class)->create()->id;
        },
    ];
});
// USER GLOBAL PERMISSION STATES
$factory->state(App\Models\User::class, 'superuser', function ($faker) {
    return [
        'permissions' => '{"superuser":"1"}',
    ];
});

$factory->state(App\Models\User::class, 'admin', function ($faker) {
    return [
        'permissions' => '{"admin":"1"}',
    ];
});
// USER ASSET PERMISSION STATES
$factory->state(App\Models\User::class, 'view-assets', function ($faker) {
    return [
        'permissions' => '{"assets.view":"1"}',
    ];
});

$factory->state(App\Models\User::class, 'create-assets', function ($faker) {
    return [
        'permissions' => '{"assets.create":"1"}',
    ];
});

$factory->state(App\Models\User::class, 'edit-assets', function ($faker) {
    return [
        'permissions' => '{"assets.edit":"1"}',
    ];
});

$factory->state(App\Models\User::class, 'delete-assets', function ($faker) {
    return [
        'permissions' => '{"assets.delete":"1"}',
    ];
});

$factory->state(App\Models\User::class, 'checkin-assets', function ($faker) {
    return [
        'permissions' => '{"assets.checkin":"1"}',
    ];
});

$factory->state(App\Models\User::class, 'checkout-assets', function ($faker) {
    return [
        'permissions' => '{"assets.checkout":"1"}',
    ];
});

$factory->state(App\Models\User::class, 'view-requestable-assets', function ($faker) {
    return [
        'permissions' => '{"assets.view.requestable":"1"}',
    ];
});

// USER ACCESSORY PERMISSION STATES
$factory->state(App\Models\User::class, 'view-accessories', function ($faker) {
    return [
        'permissions' => '{"accessories.view":"1"}',
    ];
});

$factory->state(App\Models\User::class, 'create-accessories', function ($faker) {
    return [
        'permissions' => '{"accessories.create":"1"}',
    ];
});

$factory->state(App\Models\User::class, 'edit-accessories', function ($faker) {
    return [
        'permissions' => '{"accessories.edit":"1"}',
    ];
});

$factory->state(App\Models\User::class, 'delete-accessories', function ($faker) {
    return [
        'permissions' => '{"accessories.delete":"1"}',
    ];
});

$factory->state(App\Models\User::class, 'checkin-accessories', function ($faker) {
    return [
        'permissions' => '{"accessories.checkin":"1"}',
    ];
});

$factory->state(App\Models\User::class, 'checkout-accessories', function ($faker) {
    return [
        'permissions' => '{"accessories.checkout":"1"}',
    ];
});

// USER CONSUMABLE PERMISSION STATES
$factory->state(App\Models\User::class, 'view-consumables', function ($faker) {
    return [
        'permissions' => '{"consumables.view":"1"}',
    ];
});

$factory->state(App\Models\User::class, 'create-consumables', function ($faker) {
    return [
        'permissions' => '{"consumables.create":"1"}',
    ];
});

$factory->state(App\Models\User::class, 'edit-consumables', function ($faker) {
    return [
        'permissions' => '{"consumables.edit":"1"}',
    ];
});

$factory->state(App\Models\User::class, 'delete-consumables', function ($faker) {
    return [
        'permissions' => '{"consumables.delete":"1"}',
    ];
});

$factory->state(App\Models\User::class, 'checkin-consumables', function ($faker) {
    return [
        'permissions' => '{"consumables.checkin":"1"}',
    ];
});

$factory->state(App\Models\User::class, 'checkout-consumables', function ($faker) {
    return [
        'permissions' => '{"consumables.checkout":"1"}',
    ];
});

// USER LICENSE PERMISSION STATES
$factory->state(App\Models\User::class, 'view-licenses', function ($faker) {
    return [
        'permissions' => '{"licenses.view":"1"}',
    ];
});

$factory->state(App\Models\User::class, 'create-licenses', function ($faker) {
    return [
        'permissions' => '{"licenses.create":"1"}',
    ];
});

$factory->state(App\Models\User::class, 'edit-licenses', function ($faker) {
    return [
        'permissions' => '{"licenses.edit":"1"}',
    ];
});

$factory->state(App\Models\User::class, 'delete-licenses', function ($faker) {
    return [
        'permissions' => '{"licenses.delete":"1"}',
    ];
});

$factory->state(App\Models\User::class, 'checkout-licenses', function ($faker) {
    return [
        'permissions' => '{"licenses.checkout":"1"}',
    ];
});

$factory->state(App\Models\User::class, 'view-keys-licenses', function ($faker) {
    return [
        'permissions' => '{"licenses.keys":"1"}',
    ];
});

// USER COMPONENTS PERMISSION STATES
$factory->state(App\Models\User::class, 'view-components', function ($faker) {
    return [
        'permissions' => '{"components.view":"1"}',
    ];
});

$factory->state(App\Models\User::class, 'create-components', function ($faker) {
    return [
        'permissions' => '{"components.create":"1"}',
    ];
});

$factory->state(App\Models\User::class, 'edit-components', function ($faker) {
    return [
        'permissions' => '{"components.edit":"1"}',
    ];
});

$factory->state(App\Models\User::class, 'delete-components', function ($faker) {
    return [
        'permissions' => '{"components.delete":"1"}',
    ];
});

$factory->state(App\Models\User::class, 'checkin-components', function ($faker) {
    return [
        'permissions' => '{"components.checkin":"1"}',
    ];
});

$factory->state(App\Models\User::class, 'checkout-components', function ($faker) {
    return [
        'permissions' => '{"components.checkout":"1"}',
    ];
});

// USER USER PERMISSION STATES
$factory->state(App\Models\User::class, 'view-users', function ($faker) {
    return [
        'permissions' => '{"users.view":"1"}',
    ];
});

$factory->state(App\Models\User::class, 'create-users', function ($faker) {
    return [
        'permissions' => '{"users.create":"1"}',
    ];
});

$factory->state(App\Models\User::class, 'edit-users', function ($faker) {
    return [
        'permissions' => '{"users.edit":"1"}',
    ];
});

$factory->state(App\Models\User::class, 'delete-users', function ($faker) {
    return [
        'permissions' => '{"users.delete":"1"}',
    ];
});
