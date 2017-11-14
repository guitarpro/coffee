<?php

use Illuminate\Database\Seeder;

class ProductTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $product = new \App\Product([
            'imagePath' => 'https://static.petersofkensington.com.au/images/ProductImages/563057-Zoom.jpg',
            'title' => 'ESSENZA MINI PIANO BLACK BUNDLE',
            'description' => 'Small machine for big coffee moments. With Essenza Mini, Nespresso has delivered its most compact machine yet – without any compromise on taste. Offering 2 programmable cup sizes, Essenza Mini machine creates perfect coffee just the way you like it. Choose from 2 distinctive contemporary shapes and 3 colors to fit your style and space',
            'price' => 199
        ]);
        $product->save();

        $product = new \App\Product([
            'imagePath' => 'https://cdn.buyvaluablestuff.com/wp-content/uploads/2016/07/Nespresso-Aeroccino-Milk-Frother-2.jpg',
            'title' => 'AEROCCINO+',
            'description' => 'The Aeroccino+ is a milk frother, which helps in an automatic and amazingly simple way of creating light, creamy hot or cold milk froth. Just pour in some cold, fresh milk and press the button.',
            'price' => 99
        ]);
        $product->save();

        $product = new \App\Product([
            'imagePath' => 'https://www.nespresso.com/ecom/medias/sys_master/public/10396900786206/-2-AltoSleeveWrap-Zoom-1448x892.jpg',
            'title' => 'INTENSE VARIETY COFFEE ASSORTMENT',
            'description' => 'This high intensity coffee assortment includes our three coffee sizes, espresso, coffee, and Alto coffee. Because the great taste of your favorite Nespresso Grand Cru is unmeasurable.',
            'price' => 40
        ]);
        $product->save();

        $product = new \App\Product([
            'imagePath' => 'https://www.nespresso.com/ecom/medias/sys_master/public/10453541257246/-1-AltoDolce-Zoom-1448x892.jpg',
            'title' => 'ON-THE-GO SET',
            'description' => 'This mild coffee selection will delight your coffee moment, whether a short cup or long, any time of the day. If you\'re on the go, make sure to use the Alto travel mug for your favorite Nespresso coffee.',
            'price' => 75
        ]);
        $product->save();

        $product = new \App\Product([
            'imagePath' => 'https://www.nespresso.com/ecom/medias/sys_master/public/10375306149918/Intenso-Ice-684x378.jpg',
            'title' => 'INTENSO ON ICE 5 SLEEVES PACK',
            'description' => 'Intenso on Ice is a bold coffee specifically designed to provide an intense yet refreshing iced beverage at home. Its roasted and powerful coffee aromatics reveal themselves fully when prepared following the Nespresso iced coffee recipe.',
            'price' => 40
        ]);
        $product->save();

        $product = new \App\Product([
            'imagePath' => 'https://www.nespresso.com/ecom/medias/sys_master/public/10394849640478/-3-Indulgent-Pack-Main-684X378.jpg',
            'title' => 'VERTUO INDULGENT PACK AND DISPENSER SET',
            'description' => 'Explore the rich tastes and differing notes of our Vertuo Indulgent Pack and Dispenser Set. It’s the perfect choice to discover a distinctive range of extraordinary Grand Cru coffees.  Have your  favorite Grands Crus displayed with this convenient and stylish counter top column dispenser.',
            'price' => 119
        ]);
        $product->save();
    }
}
