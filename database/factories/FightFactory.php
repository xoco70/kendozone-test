<?php


use Xoco70\KendoTournaments\Models\Fight;

$factory->define(Fight::class, function () {

    return [
        'short_id'          => $faker->randomElement($name),
        'fighters_group_id'        => $faker->randomElement($gender),
        'c1'        => $faker->numberBetween(0, 1),
        'c2'   => $faker->numberBetween(0, 5),
    ];
});
