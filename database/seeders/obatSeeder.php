<?php

namespace Database\Seeders;

use App\Models\Obat;
use Illuminate\Database\Seeder;

class obatSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $obat = [
            [
                'nama' => 'Paracetamol',
                'tgl_masuk' => '2022-03-06',
                'tgl_expired' => '2035-01-11',
                'stok' => '50'
            ],
            [
                'nama' => 'Medformine',
                'tgl_masuk' => '2021-02-25',
                'tgl_expired' => '2030-05-22',
                'stok' => '100'
            ],
            [
                'nama' => 'Renabetic',
                'tgl_masuk' => '2022-11-06',
                'tgl_expired' => '2035-01-11',
                'stok' => '50'
            ],
            [
                'nama' => 'Sanmol',
                'tgl_masuk' => '2022-02-01',
                'tgl_expired' => '2035-01-11',
                'stok' => '50'
            ],
            [
                'nama' => 'Samcobion',
                'tgl_masuk' => '2022-03-06',
                'tgl_expired' => '2035-01-11',
                'stok' => '50'
            ]
        ];

        foreach ($obat as $value) {
            Obat::create($value);
        }
    }
}
