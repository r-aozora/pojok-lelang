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
            'nama'=>'Admin Pojok Lelang',
            'username'=>'pojoklelangadmin',
            'password'=>Hash::make('password'),
            'level'=>'Administrator',
            'created_at'=>date('Y-m-d H:i:s')
        ]);
        DB::table('users')->insert([
            'id'=>'2',
            'nama'=>'Petugas Pojok Lelang',
            'username'=>'pojoklelangpetugas',
            'password'=>Hash::make('password'),
            'level'=>'Petugas',
            'created_at'=>date('Y-m-d H:i:s')
        ]);
        DB::table('users')->insert([
            'id'=>'3',
            'nama'=>'Muhamad Citra Hidayat',
            'username'=>'citrahdy',
            'password'=>Hash::make('12345678'),
            'level'=>'Masyarakat',
            'created_at'=>date('Y-m-d H:i:s')
        ]);
        DB::table('users')->insert([
            'id'=>'4',
            'nama'=>'Lintang Balakosa Ardhana',
            'username'=>'lintang',
            'password'=>Hash::make('12345678'),
            'level'=>'Masyarakat',
            'created_at'=>date('Y-m-d H:i:s')
        ]);
        DB::table('users')->insert([
            'id'=>'5',
            'nama'=>'Amanda Cahya Kamila',
            'username'=>'cykmila',
            'password'=>Hash::make('12345678'),
            'level'=>'Masyarakat',
            'created_at'=>date('Y-m-d H:i:s')
        ]);
        DB::table('users')->insert([
            'id' => '6',
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
            'foto' => '230602052802.jpg',
            'created_at' => date('Y-m-d H:i:s'),
        ]);
        DB::table('barang')->insert([
            'id' => '2',
            'nama_barang' => 'Lego Minifigure Mr. Gold',
            'harga_awal' => '500000',
            'deskripsi_barang' => 'Lego Minifigure Series 10 Mr. Gold',
            'foto' => '230602052825.jpg',
            'created_at' => date('Y-m-d H:i:s'),
        ]);
        DB::table('barang')->insert([
            'id' => '3',
            'nama_barang' => 'Manga One Piece Vol 1-10',
            'harga_awal' => '1000000',
            'deskripsi_barang' => 'Manga One Piece Vol 1-10',
            'foto' => '230602052843.jpg',
            'created_at' => date('Y-m-d H:i:s'),
        ]);
        DB::table('lelang')->insert([
            'id' => '1',
            'id_barang' => '1',
            'harga_akhir' => null,
            'id_masyarakat' => null,
            'id_petugas' => '2',
            'status' => 'Dibuka',
            'created_at' => date('Y-m-d H:i:s'),
        ]);
        DB::table('lelang')->insert([
            'id' => '2',
            'id_barang' => '2',
            'harga_akhir' => null,
            'id_masyarakat' => null,
            'id_petugas' => '2',
            'status' => 'Dibuka',
            'created_at' => date('Y-m-d H:i:s'),
        ]);
        DB::table('lelang')->insert([
            'id' => '3',
            'id_barang' => '3',
            'harga_akhir' => null,
            'id_masyarakat' => null,
            'id_petugas' => '2',
            'status' => 'Dibuka',
            'created_at' => date('Y-m-d H:i:s'),
        ]);
    }
}
