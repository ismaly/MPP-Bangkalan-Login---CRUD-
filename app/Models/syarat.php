<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class syarat extends Model
{
    use HasFactory;

    protected $table = 'syarats';
    protected $primaryKey = 'id_komponen';

    protected $fillable = [
        'komponen',
        'uraian',
        'id_sub',
    ];

    public function subPelayanan()
    {
        return $this->belongsTo(SubPelayanan::class, 'id_sub');
    }
}
