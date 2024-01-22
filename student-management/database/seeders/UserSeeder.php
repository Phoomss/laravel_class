<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run()
    {
        $user = new \App\Models\User;
        $user->name = "Narongsak P.";
        $user->email = "narongsak@gmail.com";
        $user->password = Hash::make('12345678');
        $user->save();

        $user = new \App\Models\User;
        $user->name = "pp";
        $user->email = "pp@gmail.com";
        $user->password = Hash::make('12345678');
        $user->save();
        
    }
}
