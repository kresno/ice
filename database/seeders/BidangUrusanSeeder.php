<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\BidangUrusan;

class BidangUrusanSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        $file = storage_path('app\seeder\bidangurusan.csv');

        $arr  = csvToArray($file);

        for($i= 0; $i < count($arr); $i++)
        {
            BidangUrusan::firstOrCreate($arr[$i]);
        }
    }
}
