<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
      $user = new User();
      $user->name =  "Parinthorn Mukdapirom";
      $user->username = "admin";
      $user->email = "61123831@g.cmru.ac.th";
      $user->password = Hash::make("1234");
      $user->save();

      // \App\Models\User::factory(10)->create();
    }
}
