<?php

namespace Database\Seeders;

use App\Models\Pasien;
use Illuminate\Database\Seeder;

class pasienSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
       $pasien =[
        [
            'nama' => 'Indar gunawan',
            'umur' => '21',
            'jk' => 'pria',
            'alamat' => 'Kisaran Gg Palawija No 3',
        ],
        [
            'nama' => 'Rafig Alfarez Badres',
            'umur' => '21',
            'jk' => 'pria',
            'alamat' => 'Marelan Pasar 5'
        ],
        [
            'nama' => 'Daniel Barear',
            'umur' => '19',
            'jk' => 'pria',
            'alamat' => 'Tanjung Morawa gg Pelita'
        ],
        [
            'nama' => 'Aline No wargo',
            'umur' => '17',
            'jk' => 'wanita',
            'alamat' => 'Tahiland'
        ],
        [
            'nama' => 'Dicky Setiawan',
            'umur' => '21',
            'jk' => 'pria',
            'alamat' => 'Lestari Dadi Dusun II'
        ]
        ];

        foreach ($pasien as $value) {
            Pasien::create($value);
        }
    }
}
