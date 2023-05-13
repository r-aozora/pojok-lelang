<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Barang extends Model
{
    use HasFactory;

    protected $table = 'barang';

    protected $fillable = [
        'id',
        'nama_barang',
        // 'tanggal',
        'harga_awal',
        'deskripsi_barang',
        'foto'
    ];

    // protected $nullable = 'deksripsi_barang';
    
    public function lelang()
    {
        return $this->hasOne(Lelang::class, 'id_barang');
    }
    
    public function history()
    {
        return $this->hasOne(History::class, 'id_barang');
    }
}
