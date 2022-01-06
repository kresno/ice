<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\IndikatorSasaran;

class IndikatorSasaran extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        $file = storage_path('app\seeder\indikatorsasaran.csv');

        $arr  = csvToArray($file);

        for($i= 0; $i < count($arr); $i++)
        {
            DataSpm::firstOrCreate($arr[$i]);
        }
    }
}
