<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\ProyekPrioritas;

class ProyekPrioritasSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        $file = storage_path('app\seeder\proyekprioritas.csv');

        $arr  = csvToArray($file);

        for($i= 0; $i < count($arr); $i++)
        {
            ProyekPrioritas::firstOrCreate($arr[$i]);
        }
    }
}
