<?php

namespace Database\Seeders;

use App\Models\Fundraising;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class FundraisingSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $fundraisings = [
            [
                "image" => "https://rb.gy/cu6fhk",
                "title" => "Fundraising untuk Pendidikan Anak Sekolah",
                "slug" => "fundraising-untuk-pendidikan-anak-sekolah",
                "collected_fund" => 2500000,
                "target_fund" => 10000000,
                "description" => "Dukung pendidikan anak-anak sekolah dengan memberikan bantuan yang diperlukan.",
                "deadline" => now()->addDays(30),
                "user_id" => rand(1, 5),
                "category_id" => 3,
                "province_id" => 1,
                "regency_id" => 1,
            ],
            [
                "image" => "https://rb.gy/0h9dle",
                "title" => "Bantuan Kesehatan untuk Pasien Kanker",
                "slug" => "bantuan-kesehatan-untuk-pasien-kanker",
                "collected_fund" => 4500000,
                "target_fund" => 8000000,
                "description" => "Dukung pasien kanker dengan memberikan bantuan biaya pengobatan dan perawatan.",
                "deadline" => now()->addDays(45),
                "user_id" => 2,
                "category_id" => 2,
                "province_id" => 1,
                "regency_id" => 1,
            ],
            [
                "image" => "",
                "title" => "Bantuan Makanan untuk Korban Bencana Banjir",
                "slug" => "bantuan-makanan-untuk-korban-bencana-banjir",
                "collected_fund" => 1500000,
                "target_fund" => 5000000,
                "description" => "Bantu korban banjir dengan menyediakan makanan sehari-hari.",
                "deadline" => now()->addDays(20),
                "user_id" => 3,
                "category_id" => 9,
                "province_id" => 1,
                "regency_id" => 1,
            ],
        ];

        foreach($fundraisings as $fundraising) {
            Fundraising::create($fundraising);
        }
    }
}
