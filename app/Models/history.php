<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class History extends Model
{
    use HasFactory;

    protected $table = 'history';

    protected $fillable = [
        'id',
        'id_lelang',
        'id_barang',
        'id_masyarakat',
        'penawaran_harga',
    ];

    public function users()
    {
        return $this->belongsTo(User::class);
    }

    public function barang()
    {
        return $this->belongsTo(Barang::class);
    }
    
    public function lelang()
    {
        return $this->belongsTo(Lelang::class);
    }
}
