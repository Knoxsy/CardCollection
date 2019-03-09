<?php

use App\Card as Card;

use App\Tag as Tag;

use Faker\Generator as Faker;

$factory->define(App\CardTag::class, function (Faker $faker) {

  return [
    'card_id' => Card::inRandomOrder()->first()->id,
    'tag_id' => Tag::inRandomOrder()->first()->id
  ];
});
