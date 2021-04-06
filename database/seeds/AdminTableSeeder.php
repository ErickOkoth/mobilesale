<?php

use Illuminate\Database\Seeder;
use App\Admin;
class AdminTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //

        $admin=new Admin();
        $admin->email="admin@gmail.com";
        $admin->password=bcrypt('password');
        $admin->name="admin";
        $admin->save();


    }
}
