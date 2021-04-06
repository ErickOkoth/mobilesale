<?php

use Illuminate\Database\Seeder;
use App\User;
class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        $user= new User();
        $user->email="head@gmail.com";
        $user->password= bcrypt("password");
        $user->name= "head";
        $user->gender="male";
        $user->phone="0716458023";
        $user->commission="0";

         $user->save();
    }
}
