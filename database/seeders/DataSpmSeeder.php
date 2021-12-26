<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\DataSpm;

class DataSpmSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        $file = storage_path('app\seeder\spm.csv');

        $arr  = csvToArray($file);

        for($i= 0; $i < count($arr); $i++)
        {
            DataSpm::firstOrCreate($arr[$i]);
        }
    }
}
