<?php

namespace Database\Seeders;

use App\Models\Rekamedis;
use Illuminate\Database\Seeder;

class rekamedisSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $rekam = [
            [
                'pasien_id' => 1,
                'dokter_id' => 1,
                'keluhan' => 'Asam Lambung',
                'obat_id' => 4
            ],
            [
                'pasien_id' => 2,
                'dokter_id' => 3,
                'keluhan' => 'Nyeri Perut Bumil',
                'obat_id' => 1
            ],
            [
                'pasien_id' => 3,
                'dokter_id' => 2,
                'keluhan' => 'Tenggoroan infeksi',
                'obat_id' => 5
            ],
            [
                'pasien_id' => 4,
                'dokter_id' => 1,
                'keluhan' => 'Otot Kaku',
                'obat_id' => 2
            ],
        ];

        foreach ($rekam as $value) {
            Rekamedis::create($value);
        }
    }
}
