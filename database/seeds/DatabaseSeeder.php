<?php

use Illuminate\Database\Seeder;
use Carbon\Carbon;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // $this->call(UsersTableSeeder::class);

        // USERS
        DB::table('users')->insert([
            'name' => 'Tony Stark',
            'email' =>'tony@gmail.com',
            'email_verified_at' => Carbon::now(),
            'password' => bcrypt('test'),
            'remember_token' => '',
            'avatar' => '/default-avatar.png',
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
        ]);
        DB::table('users')->insert([
            'name' => 'Peter Parker',
            'email' =>'peter@gmail.com',
            'email_verified_at' => Carbon::now(),
            'password' => bcrypt('test'),
            'remember_token' => '',
            'avatar' => '/default-avatar.png',
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
        ]);

        // JOURNAL ENTRIES
        DB::table('journals')->insert([
            'title' => 'eyJpdiI6Ik41U1RHZUFHNTJHekRtUWdYbFFGSHc9PSIsInZhbHVlIjoiYXlJeWRTOWFxSFR5YThCTHk4akFCNXhCQXhEN01DWVZOSjV1R0pXOEhZaz0iLCJtYWMiOiJhZDFmNjdlMWYzYzYwYmE4OWQwY2NmMTgwOWZjMzBlNGM3NWM0MTFiMDZlYTRiNGEyN2NiM2IwMTBhMGI0NzRlIn0=',
            'entry' =>'eyJpdiI6ImlsbTNDaGpER2I2N215WEVmSVBIbFE9PSIsInZhbHVlIjoiRXgxNXBRelJSN3krUjZcL3AxbnZ6U3c9PSIsIm1hYyI6ImZkNDQyNDQ4ZjA5ZThmZGY1OGQxYjM2MjJjODE0NzliZmZkNzJhNzFhYmFmOWQ0MGI5YjIxOTNlYzNmZDhmMDUifQ==',
            'user_id' => '1',
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
        ]);
        DB::table('journals')->insert([
            'title' => 'eyJpdiI6Ik41U1RHZUFHNTJHekRtUWdYbFFGSHc9PSIsInZhbHVlIjoiYXlJeWRTOWFxSFR5YThCTHk4akFCNXhCQXhEN01DWVZOSjV1R0pXOEhZaz0iLCJtYWMiOiJhZDFmNjdlMWYzYzYwYmE4OWQwY2NmMTgwOWZjMzBlNGM3NWM0MTFiMDZlYTRiNGEyN2NiM2IwMTBhMGI0NzRlIn0=',
            'entry' =>'eyJpdiI6ImlsbTNDaGpER2I2N215WEVmSVBIbFE9PSIsInZhbHVlIjoiRXgxNXBRelJSN3krUjZcL3AxbnZ6U3c9PSIsIm1hYyI6ImZkNDQyNDQ4ZjA5ZThmZGY1OGQxYjM2MjJjODE0NzliZmZkNzJhNzFhYmFmOWQ0MGI5YjIxOTNlYzNmZDhmMDUifQ==',
            'user_id' => '2',
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
        ]);
    }
}
