<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;

use Illuminate\Database\Seeder;

use App\Models\Product;
use App\Models\User;

class DatabaseSeeder extends Seeder
{
    public function run()
    {
        User::factory(10)->create();
        Product::factory(10)->create();
    }
}
