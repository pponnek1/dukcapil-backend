<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class ambilantrian extends Model
{
    use HasFactory;

    protected $fillable = [
        'tanggal',
        'nama_lengkap',
        'alamat',
        'kode',
        'nomorhp',
        'kuota',
        'antrians_id',
        'users_id',
    ];

    public function antrian()
    {
        return $this->belongsTo(antrian::class, 'antrians_id');
    }
}
