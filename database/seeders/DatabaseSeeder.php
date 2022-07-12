<?php

namespace Database\Seeders;

use App\Models\Category;
use App\Models\Country;
use App\Models\SubCategory;
use App\Models\User;
use Illuminate\Support\Str;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        $this->call([
            CountrySeeder::class,
            UserSeeder::class,
            CategorySeeder::class,
            SubCategorySeeder::class,
        ]);

        // $categories = Category::factory(10)->create();

        // $subcategories = SubCategory::factory(10)->make()->each(function($subcategory) use($categories){
        //     $subcategory->category_id = $categories->random()->id;
        //     $subcategory->save();
        // });

    }
}
