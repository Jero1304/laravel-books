@extends('welcome')

@section('content')
    <div class="container">
        <a href="{{ route('books.create') }}">create</a>

        @foreach ($books as $book)
            <div class="card" style="width: 18rem;">
                <div class="card-header">
                    <h1>titolo: {{ $book->titolo }}</h1>
                </div>
                <ul class="list-group list-group-flush">
                    <li>id: {{ $book->id }}</li>
                    <li>autore: {{ $book->autore }}</li>
                    <li>casa_editrice: {{ $book->casa_editrice }}</li>
                    <li>isbn: {{ $book->isbn }}</li>
                    <li>copie: {{ $book->copie }}</li>
                    <li>pagine: {{ $book->pagine }}</li>
                </ul>
            </div>
        @endforeach
    </div>
@endsection
