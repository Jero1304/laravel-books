<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Book extends Model
{
    use HasFactory;
    use SoftDeletes;

    protected $fillable = [
        'titolo',
        'casa_editrice',
        'isbn',
        'copie',
        'pagine',
        'genre_id',
    ];

    public function genre(){
        return $this->belongsTo(Genre::class);
    }
    public function authors(){
        return $this->belongsToMany(Author::class);
    }
    public function getAuthorsIds(){
        return $this->authors->pluck('id')->all();
    }
}
