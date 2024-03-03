<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Lelang extends Model
{
    use HasFactory;

    protected $fillable = ['slug', 'produk_id', 'masyarakat_id', 'petugas_id', 'penawaran'];

    protected $guarded = [];

    protected $primaryKey = 'id';

    protected $table = 'lelang';

    public function getRouteKeyName()
    {
        return 'slug';
    }

    public function produk()
    {
        return $this->belongsTo(Produk::class, 'produk_id');
    }

    public function masyarakat()
    {
        return $this->belongsTo(User::class, 'masyarakat_id');
    }

    public function petugas()
    {
        return $this->belongsTo(User::class, 'petugas_id');
    }
}
