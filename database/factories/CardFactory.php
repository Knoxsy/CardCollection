<?php

use Faker\Generator as Faker;

use App\Set as Set;

$factory->define(App\Card::class, function (Faker $faker) {

  return [
    'set_id' => Set::inRandomOrder()->first()->id,
    'name' => $faker->name,
    'card_number' => $faker->numberBetween($min = 1, $max = 800),
    // 'card_number_append' => function () {
    //   $cardnumberappend = ['a', 'b', 'c', 'd', 'e', 'f', 'g', 'i'];
    //   return $cardnumberappend[array_rand($cardnumberappend)];
    // }
    'front_image' => $faker->imageUrl($width = 640, $height = 480),
    'back_image' => $faker->imageUrl($width = 640, $height = 480)
  ];
});
