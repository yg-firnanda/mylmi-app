<?php

namespace Database\Seeders;

use App\Models\FundraisingCategory;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class FundraisingCategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $categories = [
            // 1
            [
                "name" => "Kemanusiaan",
                "slug" => "kemanusiaan",
            ],

            // 2
            [
                "name" => "Kesehatan",
                "slug" => "kesehatan",
            ],

            // 3
            [
                "name" => "Pendidikan",
                "slug" => "pendidikan",
            ],

            // 4 
            [
                "name" => "Infrastruktur",
                "slug" => "infrastruktur",
            ],

            // 5
            [
                "name" => "Rumah Ibadah",
                "slug" => "rumah-ibadah",
            ],

            // 6
            [
                "name" => "Lingkungan",
                "slug" => "lingkungan",
            ],

            // 7
            [
                "name" => "Kegiatan Sosial",
                "slug" => "kegiatan-sosial",
            ],

            // 8
            [
                "name" => "Balita",
                "slug" => "balita",
            ],

            // 9
            [
                "name" => "Bencana Alam",
                "slug" => "bencana-alam",
            ],

            // 10
            [
                "name" => "Panti Asuhan",
                "slug" => "panti-asuhan",
            ],

            // 11
            [
                "name" => "Difabel",
                "slug" => "difabel",
            ],
        ];

        foreach($categories as $category) {
            FundraisingCategory::create($category);
        }
    }
}
