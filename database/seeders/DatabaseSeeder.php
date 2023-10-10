<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;

use App\Models\Barang;
use App\Models\Pemain;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // \App\Models\User::factory(10)->create();

        // \App\Models\User::factory()->create([
        //     'name' => 'Test User',
        //     'email' => 'test@example.com',
        // ]);

        Pemain::create([

            'nama_pemain' => 'ronaldo',
            'no_punggung' => '34',
            'posisi' => 'pemain',

        ]
        );

        Pemain::create([

                'nama_pemain' => 'megawati',
                'no_punggung' => '25',
                'posisi' => 'pemain',

            ]
        );

        Pemain::create([

                'nama_pemain' => 'jokowi',
                'no_punggung' => '12',
                'posisi' => 'keeper',
            ]
    );
    }
}
