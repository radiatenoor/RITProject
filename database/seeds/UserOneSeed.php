<?php

use Illuminate\Database\Seeder;
use \Illuminate\Support\Facades\DB;
class UserOneSeed extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
//        $userOne = new UserOne();
//        $userOne->full_name = "aamir khan";
//        $userOne->email = "aamir@gmail.com";
//        $userOne->password = "123456";
//        $userOne->gender = "Male";
//        $userOne->check_me = "yes";
//        $userOne->save();
        //$userOne1 = new UserOne();
//        $userOne1->full_name = "shahrukh khan";
//        $userOne1->email = "shahrukh@gmail.com";
//        $userOne1->password = "123456";
//        $userOne1->gender = "Male";
//        $userOne1->check_me = "yes";
//        $userOne1->save();
        //$userOne2 = new UserOne();
//        $userOne2->full_name = "salman khan";
//        $userOne2->email = "salman@gmail.com";
//        $userOne2->password = "123456";
//        $userOne2->gender = "Male";
//        $userOne2->check_me = "yes";
//        $userOne2->save();
       DB::table('user_one')->insert([
            ['full_name'=>"aamir khan", 'email'=>"aamir@gmail.com",
            'password'=>"123456", 'gender'=>"Male", 'check_me'=>"yes",
            'created_at'=>date('Y-m-d h:m:s'), 'updated_at'=>date('Y-m-d h:m:s')],
            ['full_name'=>"sharukh khan", 'email'=>"sharukh@gmail.com",
               'password'=>"123456", 'gender'=>"Male", 'check_me'=>"yes",
               'created_at'=>date('Y-m-d h:m:s'), 'updated_at'=>date('Y-m-d h:m:s')],
            ['full_name'=>"salman khan", 'email'=>"salman@gmail.com",
               'password'=>"123456", 'gender'=>"Male", 'check_me'=>"yes",
               'created_at'=>date('Y-m-d h:m:s'), 'updated_at'=>date('Y-m-d h:m:s')],
        ]);
    }
}
