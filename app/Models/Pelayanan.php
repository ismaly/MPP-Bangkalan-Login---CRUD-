<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Pelayanan extends Model
{
    use HasFactory;

    protected $table = 'pelayanan';
    protected $primaryKey = 'id_layanan';

    protected $fillable = [
        'kategori_layanan',
        'id_user',
    ];

    public function user()
    {
        return $this->belongsTo(User::class, 'id_user');
    }

    public function subPelayanan()
    {
        return $this->hasMany(SubPelayanan::class, 'id_layanan');
    }
}
