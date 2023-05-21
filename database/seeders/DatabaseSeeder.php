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
            'id'=>'1',
            'nama'=>'Muhamad Citra Hidayat',
            'username'=>'citrahdy',
            'password'=>Hash::make('87654321'),
            'level'=>'Administrator',
            'created_at'=>date('Y-m-d H:i:s')
        ]);
        DB::table('users')->insert([
            'id'=>'2',
            'nama'=>'Lintang Balakosa Ardhana',
            'username'=>'lintang',
            'password'=>Hash::make('87654321'),
            'level'=>'Petugas',
            'created_at'=>date('Y-m-d H:i:s')
        ]);
        DB::table('users')->insert([
            'id'=>'3',
            'nama'=>'Amanda Cahya Kamila',
            'username'=>'cykmila',
            'password'=>Hash::make('12345678'),
            'level'=>'Masyarakat',
            'created_at'=>date('Y-m-d H:i:s')
        ]);
        DB::table('users')->insert([
            'id' => '4',
            'nama' => 'Fiana Al Mahdyani',
            'username' => 'fianaaa',
            'password' => Hash::make('12345678'),
            'level' => 'Masyarakat',
            'created_at' => date('Y-m-d H:i:s')
        ]);
        DB::table('barang')->insert([
            'id' => '1',
            'nama_barang' => 'Rubik GAN 3x3 Magnetic',
            'harga_awal' => '500000',
            'deskripsi_barang' => 'Rubik GAN 3x3 Magnetic',
            'foto' => '',
            'created_at' => date('Y-m-d H:i:s'),
        ]);
    }
}
