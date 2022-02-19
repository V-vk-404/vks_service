<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ServiceCategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('service_categories')->insert([
            [
                'name' => 'Cleaning',
                'slug' => 'cleaning',
                'image' => 'home-cleaning.png',
            ],
            [
                'name' => 'Auto Care',
                'slug' => 'Autocare',
                'image' => 'car-repair.png',
            ],
            [
                'name' => 'Food Services',
                'slug' => 'Food Services',
                'image' => 'food-service.png',
            ],
            [
                'name' => 'Home Decor',
                'slug' => 'Home Decor',
                'image' => 'home-decor.png',
            ],
            [
                'name' => 'Clothing',
                'slug' => 'Clothing',
                'image' => 'clothing.png',
            ],
            [
                'name' => 'Medical',
                'slug' => 'Medical',
                'image' => 'medical.png',
            ],
            [
                'name' => 'Renovation',
                'slug' => 'Renovation',
                'image' => 'moving-truck.png',
            ],
            [
                'name' => 'Home Appliances',
                'slug' => 'Home Appliances',
                'image' => 'home-appliance.png',
            ],
            [
                'name' => 'Plumber',
                'slug' => 'Plumber',
                'image' => 'plumber.png',
            ],
            [
                'name' => 'Electrician',
                'slug' => 'Electrician',
                'image' => 'Electrician.png',
            ],
            [
                'name' => 'Electronic',
                'slug' => 'Electronic',
                'image' => 'Electronic.png',
            ],
            [
                'name' => 'Painter',
                'slug' => 'Painter',
                'image' => 'painter.png',
            ],
            [
                'name' => 'Carpenter',
                'slug' => 'Carpenter',
                'image' => 'carpenter.png',
            ],
            [
                'name' => 'Beauty & Salon',
                'slug' => 'Beauty & Salon',
                'image' => 'hair-salon.png',
            ],
            [
                'name' => 'Pest Control',
                'slug' => 'Pest Control',
                'image' => 'pest-control.png',
            ],
        ]);
    }
}
