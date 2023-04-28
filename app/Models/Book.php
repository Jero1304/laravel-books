<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Book extends Model
{
    use HasFactory, SoftDeletes;

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
