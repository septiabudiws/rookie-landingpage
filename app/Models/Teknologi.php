<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Teknologi extends Model
{
    use HasFactory;

    protected $table = 'teknologi';
    protected $fillable = [
        'teknologi',
        'projek'
    ];

    public function projek () {
        return $this->belongsTo(Projek::class);
    }
}
