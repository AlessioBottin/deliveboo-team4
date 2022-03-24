<?php

use Illuminate\Database\Seeder;
use App\Category;

class CategoriesTwoTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $categories = [
            [
                'name' => 'Poke',
                'image' => 'https://pokelele.com/wp-content/uploads/sites/7/2020/11/Lomi.png'
            ],
            [
                'name' => 'Dessert',
                'image' => 'https://img.favpng.com/22/6/13/ice-cream-sundae-gelato-frozen-yogurt-png-favpng-p5HvyWeGVHh2vdAUAqZN3i9GT.jpg'
            ],
            [
                'name' => 'Americano',
                'image' => 'https://upload.wikimedia.org/wikipedia/en/thumb/a/a4/Flag_of_the_United_States.svg/2560px-Flag_of_the_United_States.svg.png'
            ],
            [
                'name' => 'Thailandese',
                'image' => 'https://e7.pngegg.com/pngimages/224/189/png-clipart-bulgogi-thai-cuisine-thai-curry-green-curry-pad-thai-food-recipe-food-seafood.png'
            ],
            [
                'name' => 'Kebab',
                'image' => 'https://e1.pngegg.com/pngimages/833/90/png-clipart-taco-kebab-doner-kebab-cuisine-turque-hamburger-cuisine-de-rue-plats-a-emporter-poulet-comme-nourriture.png'
            ],
            [
                'name' => 'Giapponese',
                'image' =>'https://www.vhv.rs/dpng/d/411-4111042_transparent-japanese-food-png-japanese-cuisine-png-download.png'
            ],
            [
                'name' => 'Fritti',
                'image' => 'https://freepikpsd.com/file/2019/10/fritti-png.png'
            ]
        ];

        foreach($categories as $category) {
            $new_category = new Category();
            $new_category->name = $category['name'];
            $new_category->slug = Str::slug($new_category->name, '-');
            $new_category->image = $category['image'];
            $new_category->save();
        }
    }
}
