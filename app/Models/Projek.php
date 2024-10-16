<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Projek extends Model
{
    use HasFactory;
    
    protected $table = 'projek';
    protected $fillable = [
        'judul',
        'deskripsi',
        'tujuan',
        'gambar',
        'status',
        'author'
    ];

    public function author () {
        return $this->belongsTo(User::class);
    }
    public function teknologi () {
        return $this->hasMany(Teknologi::class);
    }
}