<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Tahapan;

class TahapanSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        $file = storage_path('app\seeder\tahapan.csv');

        $arr  = csvToArray($file);

        for($i= 0; $i < count($arr); $i++)
        {
            Tahapan::firstOrCreate($arr[$i]);
        }
    }
}
