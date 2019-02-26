<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {

        factory(App\User::class, 4)->create();

        factory(App\Set::class, 10)->create();

        factory(App\Card::class, 150)->create();

        factory(App\MyCard::class, 50)->create();

        factory(App\Tag::class, 5)->create();

        factory(App\CardTag::class, 20)->create();

    }
}
