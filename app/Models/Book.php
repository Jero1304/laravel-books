<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Author;
// use Illuminate\Database\Eloquent\SoftDeletes;

class Book extends Model
{
    use HasFactory;

    protected $fillable = [
        'titolo',
        // 'autore',
        'casa_editrice',
        'isbn',
        'copie',
        'pagine',
        'genre_id',
        // 'authors',
    ];

    public function genre(){
        return $this->belongsTo(Genre::class);
    }
    public function authors(){
        return $this->belongsToMany(Author::class);
    }

}
