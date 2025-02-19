<?php

namespace Database\Seeders;

use App\Models\Menu;
// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use App\Models\User;
use App\Models\Blogs;
use App\Models\Orders;
use App\Models\OrderItems;
use Illuminate\Support\Str;
use App\Models\MenuCategories;
use Illuminate\Support\Carbon;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // User::factory(10)->create();

        User::create([
            'name' => 'Abimanyu',
            'username' => 'admin',
            'email' => 'test@example.com',
            'password' => Hash::make("admin123"),
        ]);

        $categories = [
            'Instant Coffee',
            'Coffee Makers',
            'Coffee Accessories',
            'Coffee Beans',
        ];


        foreach ($categories as $categoryName) {
            MenuCategories::create([
                'category_name' => $categoryName,
                'category_description' => 'Euismod eget id posuere nisl ut me duis in lectus elementum tincidunt augue ut neger in tincidunt amet et ultrices ' . $categoryName,
            ]);
        }

        $coffeeNames = [
            'Latte',
            'Cappuccino',
            'Americano',
            'Mocha',
            'Espresso',
            'Macchiato',
            'Affogato',
            'Flat White',
            'Ristretto',
            'Long Black',
            'Irish Coffee',
            'Turkish Coffee',
            'Vietnamese Coffee',
            'Cuban Coffee',
            'Café au Lait',
            'Café Bombón',
            'Café con Leche',
            'Café de Olla',
            'Café del Tiempo',
            'Café Touba',
        ];

        $faker=fake('id_ID');
            for ($i=0; $i < 20; $i++) {
                $data[]=[
                    'id' => Str::uuid()->toString(),
                    'menu_name' => $faker->unique()->randomElement($coffeeNames),
                    'menu_description' => $faker->sentence(),
                    'price' => $faker->randomFloat(2, 10, 99),
                    // 'price' => number_format($faker->randomFloat(2, 10, 99), 2, '.', ''),
                    'menu_image' => 'https://images.unsplash.com/photo-1587080413959-06b859fb107d?q=80&w=1184&auto=format&fit=crop&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D',
                    'is_available' => $faker->boolean(true),
                    'best_coffee' => $faker->boolean(),
                    'menu_category_id' => $faker->randomElement([1,2,3,4]),
                    'total_sold' => $faker->randomNumber(3),
                    'created_at' => Carbon::createFromDate(2022, rand(1, 12), rand(1, 28)),
                    'updated_at' => now(),
                ];
            }
        Menu::insert($data);

        $faker=fake('id_ID');
            for ($i=0; $i < 10; $i++) {
                $datas[]=[
                    'id' => Str::uuid()->toString(),
                    'title' => $faker->sentence(),
                    'content' => $faker->paragraph(),
                    'image' => 'https://images.unsplash.com/photo-1568046562322-0bbc869368ba?q=80&w=1035&auto=format&fit=crop&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D',
                    'user_id' => User::inRandomOrder()->first()->id,
                    'created_at' => Carbon::createFromDate(2022, rand(1, 12), rand(1, 28)),

                ];
            }
        Blogs::insert($datas);

        // // Buat beberapa data pesanan
        // for ($i = 0; $i < 10; $i++) {
        //     $order = Orders::create([
        //         'id' => Str::uuid()->toString(),
        //         'customer_name' => fake()->name(),
        //         'order_date' => now(),
        //         'total_price' => fake()->randomNumber(6),
        //         'user_id' => User::inRandomOrder()->first()->id, // Ganti dengan ID user yang sesuai
        //     ]);
        // }

        $faker=fake('id_ID');
            for ($i=0; $i < 10; $i++) {
                $datass[]=[
                    'id' => Str::uuid()->toString(),
                    'customer_name' => fake()->name(),
                    'order_date' => now(),
                    'total_price' => fake()->randomNumber(6),
                    'user_id' => User::inRandomOrder()->first()->id,
                ];
            }
        Orders::insert($datass);

    }
}
