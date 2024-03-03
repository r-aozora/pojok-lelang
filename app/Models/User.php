<?php

namespace App\Models;

// use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Laravel\Sanctum\HasApiTokens;

class User extends Authenticatable
{
    use HasApiTokens, HasFactory, Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = ['slug', 'name', 'email', 'password', 'role', 'telepon'];

    /**
     * The attributes that should be hidden for serialization.
     *
     * @var array<int, string>
     */
    protected $hidden = ['password', 'remember_token'];

    /**
     * The attributes that should be cast.
     *
     * @var array<string, string>
     */
    protected $casts = ['email_verified_at' => 'datetime', 'password' => 'hashed'];

    protected $guarded = [];

    protected $primaryKey = 'id';

    protected $table = 'users';

    public function getRouteKeyName()
    {
        return 'slug';
    }

    public function lelang()
    {
        return $this->hasMany(Lelang::class, 'masyarakat_id');
    }

    public function petugasLelang()
    {
        return $this->hasMany(Lelang::class, 'petugas_id');
    }

    public function histori()
    {
        return $this->hasMany(Histori::class, 'masyarakat_id');
    }
}
