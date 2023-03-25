<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasOne;

class lelang extends Model
{
    use HasFactory;
    protected $table = 'lelang';
    protected $fillable = [
        'id_lelang',
        'id_barang',
        'tanggal_lelang',
        'harga_akhir',
        'id_user',
        'id_barang',
        'status',
    ];
    public function masyarakat() : BelongsTo
    {
        return $this->belongsTo(Masyarakat::class);
    }
    public function petugas() : BelongsTo
    {
        return $this->belongsTo(Petugas::class);
    }
    public function barang() : BelongsTo
    {
        return $this->belongsTo(Barang::class);
    }
    public function history() : HasOne
    {
        return $this->hasOne(History::class);
    }
}
