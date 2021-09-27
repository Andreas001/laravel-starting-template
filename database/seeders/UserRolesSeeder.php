<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;

class UserRolesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $fileName = __DIR__.'/Data/UserRoles.csv';
        $csvData = file_get_contents($fileName);
        $lines = explode(PHP_EOL, $csvData);

        foreach ($lines as $line){
            $array = str_getcsv($line);

            DB::table('user_roles')->insert([
                'user_id' => $array[0],
                'role_id' => $array[1],
            ]);
        }
    }
}
