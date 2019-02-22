<?php

use Faker\Generator as Faker;

$factory->define(App\Tag::class, function (Faker $faker) {

  $tag = [
    'RC', 'AS', 'HOF', 'DK', 'COACH'
  ];

  return [
    'name' => $tag[array_rand($tag)]
  ];

});
