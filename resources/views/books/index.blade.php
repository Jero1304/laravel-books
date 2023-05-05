@extends('welcome')

@section('content')
    <div class="container py-5 px-0">
        <div class="d-flex">
            <a class="btn btn-primary" href="{{ route('books.create') }}">New Project</a>
            <a class="btn btn-light border ms-4" href="#">Cestino</a>
        </div>
    </div>




    <div class="container">
        <div class="row gap-5">

            @foreach ($books as $book)
                <div class="card p-0" style="width: 18rem; height:auto;">
                    <div class="card-header">
                        <h5 class="card-title py-3 fs-4">Titolo: <br>
                            <a href="{{ route('books.show', $book) }}">{{ $book->titolo }}</a>
                        </h5>
                        {{-- <span class="card-text fs-5">
                            Autore:<p class="fs-6">{{ $book->autore }}</p>
                        </span> --}}

                        <span class="card-text fs-5">
                            Autore:
                            <p class="fs-6">
                            <ul>
                                @forelse ($book->authors as $author)
                                    {{-- <li>{{ $book}}</li> --}}
                                    <li>{{ $author->name }}</li>
                                @empty
                                @endforelse
                            </ul>
                            </p>
                        </span>



                        <span class="card-text fs-5">
                            Genere:<p class="fs-6">{{ $book->genre->name }}</p>
                        </span>

                        <div class="d-flex align-items-center justify-content-around py-4">
                            <a class="btn btn-primary" href="{{ route('books.edit', $book) }}">Modifica</a>
                            <a class="btn btn-primary" href="#" class="card-link">Elimina</a>
                        </div>
                    </div>

                    <ul class="list-group list-group-flush">
                        <li class="list-group-item">ID: {{ $book->id }}</li>
                        <li class="list-group-item">Casa editrice:
                            <p>{{ $book->casa_editrice }}</p>
                        </li>
                        <li class="list-group-item">ISBN:
                            <p>{{ $book->isbn }}</p>
                        </li>
                        <li class="list-group-item">Copie:
                            <p>{{ $book->copie }}</p>
                        </li>
                        <li class="list-group-item">Pagine:
                            <p>{{ $book->pagine }}</p>
                        </li>
                    </ul>

                </div>
            @endforeach
        </div>
    </div>
@endsection
