<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\SubKegiatan;

class SubKegiatanSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        $file = storage_path('app\seeder\subkegiatan.csv');

        $arr  = csvToArray($file);

        for($i= 0; $i < count($arr); $i++)
        {
            SubKegiatan::firstOrCreate($arr[$i]);
        }
    }
}
