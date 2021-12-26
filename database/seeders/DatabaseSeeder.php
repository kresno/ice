<?php

namespace Database\Seeders;

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
        // \App\Models\User::factory(10)->create();
        // $this->call(VisiSeeder::class);
        // $this->call(MisiSeeder::class);
        // $this->call(TujuanSeeder::class);
        // $this->call(SasaranSeeder::class);
        // $this->call(UrusanSeeder::class);
        // $this->call(BidangUrusanSeeder::class);
        // $this->call(ProgramSeeder::class);
        // $this->call(KegiatanSeeder::class);
        // $this->call(SubKegiatanSeeder::class);
        // $this->call(AsmasSeeder::class);
        // $this->call(PokirSeeder::class);
        // $this->call(DataSpmSeeder::class);
        // $this->call(BidangPrioritasSeeder::class);
        // $this->call(ProyekPrioritasSeeder::class);
        $this->call(DataSpmSeeder::class);
    }
}
