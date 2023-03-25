<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class history extends Model
{
    use HasFactory;
    protected $table = 'history';
    protected $fillable = [
        'id_history',
        'id_lelang',
        'id_barang',
        'id_user',
        'penawaran_harga',
    ];
    public function masyarakat() : BelongsTo
    {
        return $this->belongsTo(Masyarakat::class);
    }
    public function barang() : BelongsTo
    {
        return $this->belongsTo(Barang::class);
    }
    public function lelang() : BelongsTo
    {
        return $this->belongsTo(Lelang::class);
    }
}
