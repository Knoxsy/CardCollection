<?php



use Faker\Generator as Faker;

use App\User as User;


$factory->define(App\MyCard::class, function (Faker $faker) {



    return [
      'user_id' => User::inRandomOrder()->first()->id,

      'card_id' => function () {
          return factory(App\Card::class)->create()->id;
      },
      
      'condition' => function () {
        $mycardcondition = [
          'MT', 'NM', 'EX', 'VG', 'G'
        ];
        return $mycardcondition[array_rand($mycardcondition)];
      }
    ];
});
