@extends('welcome')

@section('content')
    <div class="container py-5 px-0">
        <div class="d-flex gap-3">
            <a class="btn btn-primary" href="{{ route('books.create') }}">New Project</a>

          @if(request('trashed'))
            <a class="btn btn-sm btn-light" href="{{ route('books.index') }}">Tutti i post</a>
          @else
            <a class="btn btn-sm btn-danger" href="{{ route('books.index',['trashed' => true]) }}">Cestino ({{ $num_of_trashed}})</a>
          @endif
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
                            Genere:<p class="fs-6">{{ $book->genre ? $book->genre->name : '-' }}</p>
                        </span>

                        <div class="d-flex align-items-center justify-content-around py-4">
                            <a class="btn btn-primary" href="{{ route('books.edit', $book) }}">Modifica</a>
                            <form action="{{ route('books.destroy',$book) }}" method="POST">
                                @csrf
                                @method('DELETE')
                                <input type="submit" class="btn btn-danger" value="Elimina">
                            </form>
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
