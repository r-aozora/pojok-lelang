<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Petugas extends Model
{
    use HasFactory;

    protected $table = 'petugas';

    protected $fillable = ['id_petugas'];

    public function user() : BelongsTo
    {
        return $this->belongsTo(User::class);
    }
    
    public function lelang() : HasMany
    {
        return $this->hasMany(Lelang::class);
    }
}
