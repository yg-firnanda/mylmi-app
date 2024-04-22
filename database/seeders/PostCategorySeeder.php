<?php

namespace Database\Seeders;

use App\Models\PostCategory;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class PostCategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $categories = [
            [
                "name" => "Berita",
                "slug" => "berita",
            ],
            [
                "name" => "Program",
                "slug" => "program",
            ],
            [
                "name" => "Inspirasi",
                "slug" => "inspirasi",
            ],
            [
                "name" => "Edukasi",
                "slug" => "edukasi",
            ],
            [
                "name" => "Mitra",
                "slug" => "mitra",
            ],
        ];

        foreach($categories as $category) {
            PostCategory::create($category);
        }
    }
}
