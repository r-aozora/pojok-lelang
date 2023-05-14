<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class History extends Model
{
    use HasFactory;

    protected $table = 'history';

    protected $fillable = [
        'id',
        // 'id_lelang',
        // 'id_barang',
        // 'id_masyarakat',
        'penawaran_harga',
    ];

    public function masyarakat()
    {
        return $this->belongsTo(Masyarakat::class, 'id_masyarakat');
    }

    public function barang()
    {
        return $this->belongsTo(Barang::class, 'id_barang');
    }
    
    public function lelang()
    {
        return $this->belongsTo(Lelang::class, 'id_lelang');
    }
}
