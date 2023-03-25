<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasMany;

class masyarakat extends Model
{
    use HasFactory;
    protected $table = 'masyarakat';
    protected $fillable = ['id_user', 'telepon'];
    public function user() : BelongsTo
    {
        return $this->belongsTo(User::class);
    }
    public function lelang() : HasMany
    {
        return $this->hasMany(Lelang::class);
    }
    public function history() : HasMany
    {
        return $this->hasMany(History::class);
    }
}
