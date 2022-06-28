<?php

namespace Database\Seeders;

use App\Models\Category;
use Illuminate\Database\Seeder;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class CategoriesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $categories =[
            'Civil',
            'Electrical',
            'Mechnical',
            'Electronic',
            'ComputerScience',
        ];
        foreach ($categories as $category) {
            Category::create([
                'category' => $category,
            ]);
        }
    }
}
