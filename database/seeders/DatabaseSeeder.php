<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;

use App\Models\MataKuliah;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        $this->call([
            ArtikelSeeder::class
        ]);
        $this->call([
            HobiSeeder::class
        ]);
        $this->call([
            KeluargaSeeder::class
        ]);
        $this->call([
            MataKuliahSeeder::class
        ]);
        // $this->call([
        //     BelajarSeeder::class
        // ]);
    }
}
