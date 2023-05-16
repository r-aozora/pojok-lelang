<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Lelang extends Model
{
    use HasFactory;

    protected $table = 'lelang';

    protected $fillable = [
        'id',
        'id_barang',
        // 'harga_akhir',
        // 'id_masyarakat',
        'id_petugas',
        // 'status',
    ];

    public function masyarakat()
    {
        return $this->belongsTo(Masyarakat::class, 'id_masyarakat');
    }

    public function petugas()
    {
        return $this->belongsTo(Petugas::class, 'id_petugas');
    }

    public function barang()
    {
        return $this->belongsTo(Barang::class);
    }

    public function history()
    {
        return $this->hasOne(History::class);
    }
}
