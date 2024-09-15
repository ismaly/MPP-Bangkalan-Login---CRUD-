<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Galeri extends Model
{
    use HasFactory;

    // Nama tabel
    protected $table = 'galeries';

    // Primary key
    protected $primaryKey = 'id_galeri';

    // Kolom yang dapat diisi secara massal
    protected $fillable = [
        'title',
        'gambar_mpp',
        'id_user',
    ];

    // Relasi ke model User
    public function user()
    {
        return $this->belongsTo(User::class, 'id_user', 'id_user');
    }
}
