<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasOne;

class Barang extends Model
{
    use HasFactory;

    protected $table = 'barang';

    protected $fillable = [
        'id_barang',
        'nama_barang',
        'tanggal',
        'harga_awal',
        'deskripsi_barang',
        'foto'
    ];

    // protected $nullable = 'deksripsi_barang';
    
    public function lelang()
    {
        return $this->hasOne(Lelang::class);
    }
    
    public function history()
    {
        return $this->hasOne(History::class);
    }
}
