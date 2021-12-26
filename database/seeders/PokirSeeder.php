<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\DataPokir;

class PokirSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        //
        $file = storage_path('app\seeder\pokir-sample.csv');

        $arr  = csvToArray($file);

        for($i= 0; $i < count($arr); $i++)
        {
            DataPokir::firstOrCreate($arr[$i]);
        }
    }
}
