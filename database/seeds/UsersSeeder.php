<?php

use App\User;
use Carbon\Carbon;
use Illuminate\Database\Seeder;
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
        $user = new User();
        $user->name                 = 'Administrator';
        $user->email                = 'administrator@123cvb.pl';
        $user->email_verified_at    = Carbon::now()->format('Y-m-d h:i:s');
        $user->password             = Hash::make('qwerty');
        $user->save();
    }
}
