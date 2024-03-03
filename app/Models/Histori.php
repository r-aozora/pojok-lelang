<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Histori extends Model
{
    use HasFactory;

    protected $fillable = ['lelang_id', 'masyarakat_id', 'penawaran'];

    protected $guarded = [];

    protected $primaryKey = 'id';

    protected $table = 'histori';

    public function getRouteKeyName()
    {
        return 'id';
    }

    public function lelang()
    {
        return $this->belongsTo(Lelang::class, 'lelang_id');
    }

    public function masyarakat()
    {
        return $this->belongsTo(User::class, 'masyarakat_id');
    }
}
