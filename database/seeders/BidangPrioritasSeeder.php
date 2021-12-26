<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\BidangPrioritas;

class BidangPrioritasSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        $file = storage_path('app\seeder\bidangprioritas.csv');

        $arr  = csvToArray($file);

        for($i= 0; $i < count($arr); $i++)
        {
            BidangPrioritas::firstOrCreate($arr[$i]);
        }
    }
}
