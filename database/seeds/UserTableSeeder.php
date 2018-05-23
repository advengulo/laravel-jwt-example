<?php

use Illuminate\Database\Seeder;

use App\User;

class UserTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $user = new User();
        $user->name = "Foo";
        $user->email = "foo@bar.com";
        $user->password = \Hash::make('secret');
        $user->save();
    }
}
