<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Criteria;

class CriteriaSeeder extends Seeder
{
    public function run()
    {
        $data = [
            ['Code' => 'C1', 'name' => 'Umur (Tahun)', 'category' => 'Beneift', 'weight' => 1],
            ['Code' => 'C2', 'name' => 'Afirmasi (Perpindahan Orang Tua)', 'category' => 'Beneift', 'weight' => 1],
            ['Code' => 'C3', 'name' => 'Potensi Kecerdasan', 'category' => 'Beneift', 'weight' => 1.5],
            ['Code' => 'C4', 'name' => 'Penghasilan Orang Tua (Rupiah)', 'category' => 'Beneift', 'weight' => 1],
            ['Code' => 'C5', 'name' => 'Kemampuan Komunikasi', 'category' => 'Beneift', 'weight' => 1],
            ['Code' => 'C6', 'name' => 'Ketaatan Beragama', 'category' => 'Beneift', 'weight' => 0.5],
            ['Code' => 'C7', 'name' => 'Prestasi', 'category' => 'Beneift', 'weight' => 1],
            ['Code' => 'C8', 'name' => 'Kedisiplinan', 'category' => 'Beneift', 'weight' => 0.5],
            ['Code' => 'C9', 'name' => 'Kepedulian', 'category' => 'Beneift', 'weight' => 0.5],
            ['Code' => 'C10', 'name' => 'Jarak', 'category' => 'Cost', 'weight' => 2],
        ];

        // Masukkan data ke dalam tabel 'criteria'
        foreach ($data as $criteria) {
            Criteria::create($criteria);
        }
    }
}
