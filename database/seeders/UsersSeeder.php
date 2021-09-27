<?php

use App\Enum\Profiling\UserStatus;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Carbon\Carbon;
use Illuminate\Support\Facades\Hash;

class UsersSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $fileName = __DIR__ . '/Data/Users.csv';
        $csvData = file_get_contents($fileName);
        $lines = explode(PHP_EOL, $csvData);

        foreach ($lines as $line) {
            $array = str_getcsv($line);

            if (10 !== count($array)) {
                continue;
            }

            DB::table('users')->insert([
                'id'            => $array[0],
                'first_name'    => $array[1],
                'last_name'     => $array[2],
                'email'         => $array[3],
                'username'      => $array[4],
                'password'      => Hash::make($array[5]),
                'phone_number'  => $array[6],
                'extension'     => $array[7],
                'department_id' => $array[8],
                'village_id'    => $array[9],
                'created_at'    => Carbon::now(),
                // 'status'        => UserStatus::ACTIVE,
            ]);
        }
    }
}
