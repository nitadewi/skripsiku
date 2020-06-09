<?php

use Illuminate\Database\Seeder;

class adminsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('admins')->insert([
        	'name' => 'nita',
        	'username' => 'nita',
        	'password' => '$2y$10$sx.2bPLsX5Jaw31FhaDSlO605DyXCrqBBrth9xIfkQc1vr0fRDu.6',
            'remember_token' => 'UcWiS7vTrdt8N9LmqRyIGCvffLSQo0FHJCI8gBvcYw2Pe2XbhWeylaNF84rh',
            'created_at'      => \Carbon\Carbon::now('Asia/Jakarta')
            ]);
    }
}
