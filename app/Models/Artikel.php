<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Artikel extends Model
{
    use HasFactory;

    protected $table = 'artikel';
    protected $fillable = [
        'judul',
        'isi',
        'author',
        'gambar',
        'komentar',
        'kategori',
    ];

    public function kategori(){
        return $this->belongsTo(Teknologi::class);
    }
    public function author(){
        return $this->belongsTo(User::class);
    }
    public function komentar () {
        return $this->hasMany(Komentar::class);
    }
}
