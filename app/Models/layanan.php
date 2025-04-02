<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class layanan extends Model
{
    use HasFactory;
    protected $guarded = ['id'];

    protected $fillable = [
        'nama_layanan',
        'kode',
        'deskripsi',
        'users_id'
    ];

    public function users()
    {
        return $this->belongsTo(User::class, 'users_id');
    }
    public function antrians()
    {
        return $this->hasMany(antrian::class, 'layanans_id');
    }
}
