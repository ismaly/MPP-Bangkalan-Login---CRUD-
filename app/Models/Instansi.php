<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Instansi extends Model
{
    use HasFactory;

    protected $table = 'instansi';
    protected $primaryKey = 'id_instansi';

    protected $fillable = [
        'nama_instansi',
        'gambar_instansi',
        'url',
        'id_user',
    ];

    public function user()
    {
        return $this->belongsTo(User::class, 'id_user');
    }
}

