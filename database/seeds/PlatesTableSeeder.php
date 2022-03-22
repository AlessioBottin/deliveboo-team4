<?php

use Illuminate\Database\Seeder;
use App\Plate;

class PlatesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $plates = config('plates');

        foreach($plates as $plate) {
            $new_plate = new Plate();
            $new_plate->name = $plate['name'];
            $new_plate->ingredients = $plate['ingredients'];
            $new_plate->description = $plate['description'];
            $new_plate->price = $plate['price'];
            $new_plate->visibility = $plate['visibility'];
            $new_plate->image = $plate['image'];
            $new_plate->user_id = $plate['user_id'];
            $new_plate->save();
        }
    }
}
