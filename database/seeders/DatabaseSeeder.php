<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
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
        // \App\Models\User::factory(10)->create();
        DB::table('users')->insert([
            'id'=>'1001',
            'nama'=>'Muhamad Citra Hidayat',
            'username'=>'citra_hdy',
            'password'=>Hash::make('87654321'),
            'level'=>'admin',
            'created_at'=>date('Y-m-d H:i:s')
        ]);
        DB::table('users')->insert([
            'id'=>'1002',
            'nama'=>'Lintang Balakosa Ardhana',
            'username'=>'lintang',
            'password'=>Hash::make('87654321'),
            'level'=>'petugas',
            'created_at'=>date('Y-m-d H:i:s')
        ]);
        DB::table('users')->insert([
            'id'=>'1003',
            'nama'=>'Amanda Cahya Kamila',
            'username'=>'cykmila',
            'password'=>Hash::make('87654321'),
            'level'=>'petugas',
            'created_at'=>date('Y-m-d H:i:s')
        ]);

        DB::table('users')->insert([
            'id'=>'2001',
            'nama'=>'Surya Nata Ardhana',
            'username'=>'nata_ardhana',
            'password'=>Hash::make('12345678'),
            'level'=>'masyarakat',
            'created_at'=>date('Y-m-d H:i:s')
        ]);
        DB::table('users')->insert([
            'id'=>'2002',
            'nama'=>'Yasser Aziz Alfalah',
            'username'=>'azizalfalahyasser',
            'password'=>Hash::make('12345678'),
            'level'=>'masyarakat',
            'created_at'=>date('Y-m-d H:i:s')
        ]);
        DB::table('users')->insert([
            'id'=>'2003',
            'nama'=>'Syawal AlFath',
            'username'=>'fathwal',
            'password'=>Hash::make('12345678'),
            'level'=>'masyarakat',
            'created_at'=>date('Y-m-d H:i:s')
        ]);
    }
}
