<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Faker\Generator as Faker;
use App\Models\Item;
use App\Models\Stock;

class ItemSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(Faker $faker): void
    {
        for ($i = 0; $i < 30; $i++) {
            $item = new Item();
            $item->name = $faker->word(); // <-- add name
            $item->description = $faker->realText(20);
            $item->cost_price = $faker->randomFloat(2, 0, 6);
            $item->sell_price = $faker->randomFloat(2, 0, 6);
            $item->img_path = 'default.jpg';
            $item->save();

            $stock = new Stock();
            $stock->item_id = $item->item_id;
            $stock->quantity = 20;
            $stock->save();
        }
    }
}
