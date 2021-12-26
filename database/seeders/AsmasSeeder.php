<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\DataAsmas;

class AsmasSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        $file = storage_path('app\seeder\asmas-sample.csv');

        $arr  = csvToArray($file);

        for($i= 0; $i < count($arr); $i++)
        {
            DataAsmas::firstOrCreate($arr[$i]);
        }
    }
}
