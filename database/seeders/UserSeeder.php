<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Str;
use App\Models\User;
class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        User::truncate();
        User::create(
            [
                'name'=>'Ahmad Zidan Nur Hakim',
                'email'=>'18610070@student.uin-malang.ac.id',
                'level'=>'Admin',
                'password'=>bcrypt('123123'),
                'remember_token'=>Str::random(60)
            ]
        );
        User::create(
            [
                'name'=>'Siti Habibatul Marifah',
                'email'=>'18610075@student.uin-malang.ac.id',
                'level'=>'Mahasiswa',
                'password'=>bcrypt('123123'),
                'remember_token'=>Str::random(60)
            ]
        );
        User::create(
            [
                'name'=>'Dian Maharani',
                'email'=>'dian.maharani@mat.uin-malang.ac.id',
                'level'=>'Dosen',
                'password'=>bcrypt('123123'),
                'remember_token'=>Str::random(60)
            ]
        );
    }
}
