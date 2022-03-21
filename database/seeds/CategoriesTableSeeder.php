<?php

use Illuminate\Database\Seeder;
use App\Category;
use Illuminate\Support\Str;

class CategoriesTableSeeder extends Seeder
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
                'name' => 'sushi',
                'image' => 'https://static.gamberorosso.it/2022/01/sushi-scaled.jpeg'
            ],
            [
                'name' => 'fast food',
                'image' => 'https://www.bresciaatavola.it/wp-content/uploads/bresciaatavola.it/2016/05/Fast-food-e1556273549545.jpg'
            ],
            [
                'name' => 'pizza',
                'image' => 'https://st.depositphotos.com/1003814/5052/i/950/depositphotos_50523105-stock-photo-pizza-with-tomatoes.jpg'
            ],
            [
                'name' => 'pub',
                'image' => 'https://media-cdn.tripadvisor.com/media/photo-s/1a/a8/88/32/a-range-of-classic-pub.jpg'
            ],
            [
                'name' => 'vegetariano',
                'image' => 'https://www.unicaradio.it/wp/wp-content/uploads/2020/11/alimentazione-vegetariana.jpg'
            ],
            [
                'name' => 'carne',
                'image' =>'https://www.ruminantia.it/wp-content/uploads/2021/03/carne-bovina-iStock.jpg'
            ],
            [
                'name' => 'messicano',
                'image' => 'https://www.viaggiaregratis.eu/wp-content/uploads/2020/11/Cucina-Messicana.jpg'
            ]
        ];

        foreach($categories as $category) {
            $new_user = new Category();
            $new_user->name = $category['name'];
            $new_user->slug = Str::slug($new_user->name, '-');
            $new_user->image = $category['image'];
            $new_user->save();
        }
    }
}
