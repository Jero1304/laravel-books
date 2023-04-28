@extends('welcome')

@section('content')
    <a href="{{ route('books.create') }}">create</a>
    <div class="container">
        <div class="row">

            @foreach ($books as $book)
                <div class="card" style="width: 18rem;">
                    <div class="card-header">
                        <h1>titolo:
                            <a href="{{ route('books.show', $book) }}">{{ $book->titolo }}</a>
                        </h1>
                        <form action="{{ route('books.destroy', $book) }}" method="POST">
                            @csrf
                            @method('DELETE')
                            <input type="submit" class="btn btn-danger btn-sm" value="Elimina">
                        </form>
                    </div>
                    <ul class="list-group list-group-flush">
                        <li>id: {{ $book->id }}</li>
                        <li>autore: {{ $book->autore }}</li>
                        <li>casa_editrice: {{ $book->casa_editrice }}</li>
                        <li>isbn: {{ $book->isbn }}</li>
                        <li>copie: {{ $book->copie }}</li>
                        <li>pagine: {{ $book->pagine }}</li>
                    </ul>
                    <a href="{{ route('books.edit', $book) }}">Modifica</a>
                </div>
            @endforeach
        </div>
    </div>
@endsection
