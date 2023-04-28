@extends('welcome')

@section('content')
    <div>
        <h1>titolo: {{ $book->titolo}}</h1>
        <p>autore: {{ $book->autore}}</p>
        <p>casa_editrice: {{ $book->casa_editrice}}</p>
        <p>isbn: {{ $book->isbn}}</p>
        <p>copie: {{ $book->copie}}</p>
        <p>pagine: {{ $book->pagine}}</p>
    </div>

@endsection



