<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Produk extends Model
{
    use HasFactory;

    protected $fillable = ['slug', 'nama', 'harga', 'deskripsi', 'gambar'];

    protected $guarded = [];

    protected $primaryKey = 'id';

    protected $table = 'produk';

    public function getRouteKeyName()
    {
        return 'slug';
    }

    public function lelang()
    {
        return $this->hasOne(Lelang::class, 'produk_id');
    }

    public function histori()
    {
        return $this->hasMany(Histori::class, 'produk_id');
    }
}
