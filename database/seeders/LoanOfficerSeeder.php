<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;
use Hash;
class LoanOfficerSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        User::create([
            'fName'     => 'Shaneika',
            'lName'     => 'Lewis',
            'gender'    => 'Female',
            'email'     => 'shaneika@amberloans.com',
            'password'  => Hash::make('password'),
        ]);
        User::create([
            'fName'     => 'Malachi',
            'lName'     => 'Lewis',
            'gender'    => 'Male',
            'email'     => 'Malachi@amberloans.com',
            'password'  => Hash::make('password'),
        ]);
    }
}
