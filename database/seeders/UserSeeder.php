<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Faker\Factory as Faker;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
      $faker = Faker::create();
      foreach(range(1,20) as $index){

        // Returns always random genders according to the name, inclusive mixed !!
        $gender = $faker->randomElement($array = array('1','0'));
        $income = $faker->numberBetween(25000,75000);
        $manglik = $faker->randomElement($array = array('Yes','No'));
        $family_type = $faker->randomElement($array = array('Joint_family','Nuclear_family'));
        $occupation = $faker->randomElement($array = array('Gvnt_job','Private_job','Business'));
        $ptr_manglik = $faker->randomElement($array = array('Yes','No','Both'));
        $email= $faker->unique()->safeEmail;
        $price1 = $faker->numberBetween(0,50000);
        $price2 = $faker->numberBetween(50000,100000);
        DB::table('users')->insert([
              'name' => Str::random(10),
              'gender' => $gender,
              'date_of_birth' => $faker->date(),
              'is_manglik'=>$manglik,
              'income'=>$income,
              'ptr_manglik'=>$ptr_manglik,
              'family_type'=>$family_type,
              'occupation'=>$occupation,
              'price1'=>$price1,
              'price2'=>$price2,
              'email' => $email,
              'password' => 'dummylogin',
        ]);
        $insert=[
            'user_email'=>$email,
            'occupation'=> $occupation,
        ];
        DB::table('ptr_occupation')->insert($insert);

        $insert2=[
            'user_email'=>$email,
            'family_type'=> $family_type,
        ];
        DB::table('ptr_family')->insert($insert2);
      }

    }
}
