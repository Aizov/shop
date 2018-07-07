<?php

use Illuminate\Database\Seeder;
use App\Product;
class ProductSeed extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Product::create([
                   'name' => 'Опиум',
                   'cost' => '666',
                   'place' => 'Novograd',
                   'img_url' => '3.jpg',
                   'description' => 'Опиат сладкий яд',
                ]
            );
    }
}
