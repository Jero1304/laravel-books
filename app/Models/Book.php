<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Book extends Model
{
    use HasFactory;

    protected $fillable = [
        'titolo',
        'autore',
        'casa_editrice',
        'isbn',
        'copie',
        'pagine'
    ];

    public function genre(){
        return $this->belongsTo(Genre::class);
    }
}
