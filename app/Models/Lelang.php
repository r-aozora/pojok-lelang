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
        'id_petugas',
    ];

    protected $attributes = [
        'id_masyarakat' => null,
        'harga_akhir' => null,
        'status' => '0',
    ];

    public function users()
    {
        return $this->belongsTo(User::class);
    }

    public function petugas()
    {
        return $this->belongsTo(User::class);
    }

    public function barang()
    {
        return $this->belongsTo(Barang::class);
    }

    public function history()
    {
        return $this->hasOne(History::class, 'id_lelang');
    }
}
