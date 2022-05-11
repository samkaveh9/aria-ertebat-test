<?php

namespace Database\Factories;

use App\Models\Product;
use Illuminate\Database\Eloquent\Factories\Factory;

class ProductFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        $productsTitle = [
            'محصول شماره ۱',
            'محصول شماره ۲',
            'محصول شماره ۳',
            'محصول شماره ۴',
            'محصول شماره ۵',
            'محصول شماره ۶',
            'محصول شماره ۷',
            'محصول شماره ۸',
            'محصول شماره ۹',
            'محصول شماره ۱۰',
        ];
        $productsImg = ['pic1.jpg', 'pic2.jpg', 'pic3.jpg', 'pic4.jpg', 'pic5.jpg', 'pic6.jpg', 'pic7.jpg', 'pic8.jpg', 'pic9.jpg'];

        $productsPrice = [2740000, 140000, 790000, 360000, 578000, 169000];

        return [
            'title' => $this->faker->randomElement($productsTitle),
            'price' => $this->faker->randomElement($productsPrice),
            'image' => $this->faker->randomElement($productsImg),
            'description' => "در این صورت می توان امید داشت که تمام و دشواری موجود در ارائه راهکارها و شرایط سخت تایپ به پایان رسد وزمان مورد نیاز شامل حروفچینی دستاوردهای اصلی و جوابگوی سوالات پیوسته اهل دنیای موجود طراحی اساسا مورد استفاده قرار گیرد.",
            'content' => "پردازشگر اینتل core i7 مک بوک جدید با پردازشگر اینتل core i7 از همیشه سریعتر ظاهر شده و آماده است که گوی سبقت را از رقبا بگیرد. 16 گیگابایت رم و هارد دیسک های بزرگتر ارائه راهکارها و شرایط سخت تایپ به پایان رسد وزمان مورد نیاز شامل حروفچینی دستاوردهای اصلی و جوابگوی سوالات پیوسته اهل دنیای موجود طراحی اساسا مورد استفاده قرار گیرد. طراحی خارق العاده و بی نظیر مک بوک در واقع ارائه راهکارها و شرایط سخت تایپ به پایان رسد وزمان مورد نیاز شامل حروفچینی دستاوردهای اصلی و جوابگوی سوالات پیوسته اهل دنیای موجود طراحی اساسا مورد استفاده قرار گیرد. با دوربین i-Sight درون ساخت بدون نیاز به ارائه راهکارها و شرایط سخت تایپ به پایان رسد وزمان مورد نیاز شامل حروفچینی دستاوردهای اصلی و جوابگوی سوالات پیوسته اهل دنیای موجود طراحی اساسا مورد استفاده قرار گیرد."
        ];
    }
}