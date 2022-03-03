<?php

namespace Database\Seeders;

use App\Models\Order;
use App\Models\Reservation;
use App\Models\Table;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // \App\Models\User::factory(10)->create();

//         Table::factory(6)->create();

        //  / To add Seeder in order table
//         Order::factory(3)->create();


        //  / To add Seeder in reservation table to work easy :D
//         Reservation::factory(3)->create();

        // \App\Models\User::factory()->create(
        //     [
        //         'name' => 'Admin',
        //         'email' => 'admin@admin.com',
        //         'password' => Hash::make('123456'),
        //         'phone' => '01045782305',
        //         'is_admin' => true
        //     ]
        // );
        //*************************************************** */
        // $products = factory('App\Product', 25)->create();

        // $faker = Faker::create();
        // $imageUrl = $faker->imageUrl(640,480, null, false);

        // foreach($products as $product){
        //     $gift->addMediaFromUrl($imageUrl)->toMediaCollection('images');
        // }


}
}
