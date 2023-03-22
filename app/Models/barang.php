<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasOne;

class barang extends Model
{
    use HasFactory;
    protected $table = 'barang';
    protected $fillable = [
        'id_barang',
        'nama_barang',
        'tanggal',
        'harga_awal',
        'deskripsi',
    ];
    public function lelang() : HasOne
    {
        return $this->hasOne(Lelang::class);
    }
    public function history() : HasOne
    {
        return $this->hasOne(History::class);
    }
}
