<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;
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
        $nisn =array(
            '0119638098'=>'Abi Azua Raihan',
            '0088418031'=>'Aditya',
            '0111416033'=>'Apriliana',
            '0108977230'=>'Arifky Ardiansyah',
            '0117184988'=>'Azkiyah Salsabila',
            '0111706187'=>'Bayu Setyo Aji',
            '0104372441'=>'Chelsen Fernando',
            '0112487200'=>'Dafa Ferreliady',
            '0114818888'=>'Fajar Gilang Harapan',
            '0114992763'=>'Fajar Pratama',
            '0107090432'=>'Hayiril',
            '0105808758'=>'Jerenn Selomitha Eveline',
            '0097491096'=>'Joni Iskandar',
            '0125922653'=>'Jovita Claudia',
            '0114008152'=>'Lidia Salsabila',
            '0103005857'=>'Muhammad Aril',
            '0104606408'=>'Muhammad Iqbal . K',
            '0103428514'=>'Muhammad Lukman Halim',
            '0109088993'=>'Muhammad Radit',
            '0103673941'=>'Muhammad Rizki',
            '0108004951'=>'Rafiq',
            '011648604'=>'Rehan',
            '0108359020'=>'Reza Arafi',
            '0105110090'=>'Rizki Gunawan',
            '0112835170'=>'Rizki Kurniadi',
            '0112336399'=>'Rifki Syahbandi',
            '0103882937'=>'Sabrina',
            '0103320180'=>'Sirot',
            '0106654424'=>'Syahfiah Awollia',
            '0116883269'=>'Syahrena',
            '0117504811'=>'Webi Anugrah',
            '0111584523'=>'Winda Pengestu',
            '0119452400'=>'Widya Lestari',
            '0104992698'=>'Zulfikar',
            '0091204904'=>'M.Aqsa Aprilian',)
        ;
        foreach ($nisn as $key=>$value){
            $user = User::create([
                'name' => $value,
                'email' => NULL,
                'password' => Hash::make('rahasia123'),
                'role' => 'pelajar',
                'remember_token' => Str::random(10),
                'email_verified_at' => now(),
                'nisn'=> $key,
            ]);
        }

    }
}
