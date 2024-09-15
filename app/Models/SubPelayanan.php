<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class SubPelayanan extends Model
{
    use HasFactory;

    protected $table = 'sub_pelayanan';
    protected $primaryKey = 'id_sub';

    protected $fillable = [
        'nama_sub',
        'id_layanan',
    ];

    public function pelayanan()
    {
        return $this->belongsTo(Pelayanan::class, 'id_layanan', 'id_layanan');
    }

    public function syarats()
    {
        // return $this->hasMany(Syarat::class, 'id_komponen');
        return $this->hasMany(syarat::class, 'id_sub');
    }
}
