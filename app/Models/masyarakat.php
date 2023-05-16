<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Masyarakat extends Model
{
    use HasFactory;

    protected $table = 'masyarakat';

    protected $fillable = ['telepon', 'id_user'];

    public function user()
    {
        return $this->belongsTo(User::class);
    }

    public function lelang()
    {
        return $this->hasMany(Lelang::class);
    }
    
    public function history()
    {
        return $this->hasMany(History::class);
    }
}
