<?php

use Faker\Generator as Faker;

$factory->define(App\Set::class, function (Faker $faker) {

  return [
    'genre' => function () {
      $set_genre = [
        'Baseball', 'Football', 'Basketball', 'Hockey', 'Gaming', 'Non-Sports'
      ];
      return $set_genre[array_rand($set_genre)];
    },
    'year' => $faker->year($min = 'now'),
    'brand' => function () {
      $set_brand = [
        'Topps', 'Fleer', 'Donruss', 'Score', 'Upper Deck', 'Bowman'
      ];
      return $set_brand[array_rand($set_brand)];
    },
    'count' => 800
  ];
});
