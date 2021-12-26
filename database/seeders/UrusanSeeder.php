<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Urusan;

class UrusanSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        $file = storage_path('app\seeder\urusan.csv');

        $arr  = csvToArray($file);

        for($i= 0; $i < count($arr); $i++)
        {
            Urusan::firstOrCreate($arr[$i]);
        }
    }
}
