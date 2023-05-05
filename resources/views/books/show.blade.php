@extends('welcome')

@section('content')
    <div class="container">

        <div class="card">
            <div class="row">
                <div class="col-3">
                    <img src="https://picsum.photos/400/400" style="height:100%;" class="img-fluid rounded-start"
                        alt="...">
                </div>
                <div class="col">
                    <div class="card-body">
                        <h5 class="card-text">Titolo:<span> {{ $book->titolo }}</span></h5>
                        <p class="card-text">Autore:<span> {{ $book->autore }}</span></p>
                        <p class="card-text">ID:<span> {{ $book->id }}</span></p>
                        <p class="card-text">Casa editrice:<span> {{ $book->casa_editrice }}</span></p>
                        <p class="card-text">ISBN:<span> {{ $book->isbn }}</span></p>
                        <p class="card-text">Copie:<span> {{ $book->copie }}</span></p>
                        <p class="card-text">Pagine:<span> {{ $book->pagine }}</span></p>
                        <p>{{ $book->genre->name }}</p>
                        <a class="btn btn-warning border" href="{{ route('books.edit', $book) }}">Modifica</a>
                    </div>
                </div>
            </div>
        </div>


        <div>
            <h1></h1>

        </div>
    </div>
@endsection
