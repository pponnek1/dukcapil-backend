<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use App\Models\User;
use App\Models\layanan;
use App\Models\ambilantrian;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Cviebrock\EloquentSluggable\Sluggable;

class antrian extends Model
{

    use HasFactory, Sluggable;
    protected $fillable = [
        'nama_antrian',
        'kode',
        'deskripsi',
        'slug',
        'persyaratan',
        'kuota',
    ];

    public function user()
    {
        return $this->belongsTo(User::class, 'users_id');
    }
    public function layanan()
    {
        return $this->belongsTo(layanan::class, 'layanans_id');
    }
    public function ambilantrian()
    {
        return $this->hasMany(ambilantrian::class, 'antrians_id');
    }
    public function getRouteKeyName()
    {
        return 'slug';
    }
    public function sluggable(): array
    {
        return [
            'slug' => [
                'source' => 'nama_antrian'
            ]
        ];
    }
}
