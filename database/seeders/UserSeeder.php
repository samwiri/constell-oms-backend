<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;

class UserSeeder extends Seeder
{
  
    public function run(): void
    {
       User::createUser("Samson Tusiime","tusiimesam@gmail.com","+256775926572","admin123@",$tin=null,$passport=null,$address="Kampala",'super_user');
    }
}
