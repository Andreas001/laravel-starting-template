<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;

class RolesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $fileName = __DIR__ . '/Data/Roles.csv';
        $csvData = file_get_contents($fileName);
        $lines = explode(PHP_EOL, $csvData);

        foreach ($lines as $line) {
            $array = str_getcsv($line);

            if (3 !== count($array)) {
                continue;
            }

            DB::table('roles')->insert([
                'id'    => $array[0],
                'name'  => $array[1],
                'label' => $array[2],
            ]);
        }
    }
}
