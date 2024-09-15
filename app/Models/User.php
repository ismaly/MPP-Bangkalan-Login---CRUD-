<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;

class User extends Authenticatable
{
    use HasFactory, Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = [
        'nama_user', // Sesuaikan dengan kolom di database
        'email',
        'password',
    ];

    /**
     * The attributes that should be hidden for serialization.
     *
     * @var array<int, string>
     */
    protected $hidden = [
        'password',
        'remember_token',
    ];

    /**
     * The attributes that should be cast to native types.
     *
     * @var array<string, string>
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
        'password' => 'hashed',
    ];

    /**
     * Get the profil associated with the user.
     */
    public function profil()
    {
        return $this->hasOne(Profil::class, 'user_id', 'id_user');
    }

    /**
     * Get the fasilitas for the user.
     */
    public function fasilitas()
    {
        return $this->hasMany(Fasilitas::class, 'user_id', 'id_user');
    }

    /**
     * Get the pelayanan for the user.
     */
    public function pelayanan()
    {
        return $this->hasMany(Pelayanan::class, 'user_id', 'id_user');
    }

    /**
     * Get the instansi for the user.
     */
    public function instansi()
    {
        return $this->hasMany(Instansi::class, 'user_id', 'id_user');
    }

    /**
     * Get the galery for the user.
     */
    public function galery()
    {
        return $this->hasMany(Syarat::class, 'user_id', 'id_user');
    }
}
