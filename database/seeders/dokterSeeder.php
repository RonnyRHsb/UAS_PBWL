<?php

namespace Database\Seeders;

use App\Models\Dokter;
use Illuminate\Database\Seeder;

class dokterSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $dokter = [
            [
                'nama' => 'Aji surya',
                'jk' => 'pria',
                'spesialis' => 'Organ Dalam'
            ],
            [
                'nama' => 'Putri',
                'jk' => 'wanita',
                'spesialis' => 'Kandungan'
            ],
            [
                'nama' => 'Alexander Grahambel',
                'jk' => 'pria',
                'spesialis' => 'HTT'
            ]
        ];

        foreach ($dokter as $value) {
            Dokter::create($value);
        }
    }
}
