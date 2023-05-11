@extends('welcome')

@section('content')
    <div class="container py-4">
        <div class="d-flex justify-content-center">
            <h1 class="badge bg-primary rounded-pill fs-1">Modifica</h1>
        </div>
    </div>

    <div class="container">
        <div class="card">
            <div class="row">
                <div class="col-3">
                    <img src="https://picsum.photos/400/400" style="height:100%;" class="img-fluid rounded-start"
                        alt="...">
                </div>
                <div class="col">
                    <div class="card-body text-capitalize">
                        <form action="{{ route('books.update', $book) }}" method="post">
                            @csrf
                            @method('PUT')
                            
                            {{-- TITOLO --}}
                            <h5 class="card-text">
                                <div class="mb-3 d-flex align-items-center gap-3 form-titolo">
                                    <label for="titolo" class="form-label">Titolo</label>
                                    <input type="text" placeholder="Titolo" name="titolo"
                                        class="form-control @error('titolo') is-invalid @enderror"
                                        value="{{ old('titolo', $book->titolo) }}" id="titolo"
                                        aria-describedby="titleHelp">
                                    {{-- errore title --}}
                                    @error('titolo')
                                        <div class="invalid-feedback">
                                            {{ $message }}
                                        </div>
                                    @enderror
                                </div>
                            </h5>

                            {{-- AUTORE --}}
                            <div class="card-text d-flex align-items-center gap-3 accordion accordion-flush w-auto"
                                id="accordionFlushExample">
                                <span class="me-3">Autore:</span>
                                <div class="accordion-item w-100 border">
                                    <h2 class="accordion-header">
                                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                            data-bs-target="#flush-collapseOne" aria-expanded="false"
                                            aria-controls="flush-collapseOne">
                                            Autore
                                        </button>
                                    </h2>
                                    <div id="flush-collapseOne" class="accordion-collapse collapse"
                                        data-bs-parent="#accordionFlushExample">
                                        <div class="accordion-body">
                                            @foreach ($authors as $author)
                                                <div class="form-check">
                                                    <input @checked(in_array($author->id, old('authors', $book->getAuthorsIds()))) value="{{ $author->id }}"
                                                        name="authors[]" class="form-check-input" type="checkbox"
                                                        value="{{ $author->id }}" id="flexCheckDefault">
                                                    <label class="form-check-label" for="flexCheckDefault">
                                                        {{ $author->name }}
                                                    </label>
                                                </div>
                                            @endforeach
                                        </div>
                                    </div>
                                    {{-- errore autore --}}
                                    @error('authors')
                                        <div class="invalid-feedback">
                                            {{ $message }}
                                        </div>
                                    @enderror
                                </div>
                            </div>

                            {{-- ID --}}
                            <p class="card-text py-3">ID:<span> {{ $book->id }}</span></p>

                            {{-- CASA --}}
                            <p class="card-text">
                            <div class="mb-3 d-flex align-items-center gap-3 form-casa">
                                <label for="casa_editrice" class="form-label">Casa Editrice</label>
                                <input type="text" placeholder="Casa Editrice" name="casa_editrice"
                                    class="form-control @error('casa_editrice') is-invalid @enderror"
                                    value="{{ old('casa_editrice', $book->casa_editrice) }}" id="casa_editrice">
                                {{-- errore title --}}
                                @error('casa_editrice')
                                    <div class="invalid-feedback">
                                        {{ $message }}
                                    </div>
                                @enderror
                            </div>
                            </p>

                            {{-- ISBN --}}
                            <p class="card-text">
                            <div class="mb-3 d-flex align-items-center gap-3 form-isbn">
                                <label for="isbn" class="form-label">isbn</label>
                                <input type="text" name="isbn"
                                    class="form-control @error('isbn') is-invalid @enderror"
                                    value="{{ old('isbn', $book->isbn) }}" id="isbn">
                                {{-- errore title --}}
                                @error('isbn')
                                    <div class="invalid-feedback">
                                        {{ $message }}
                                    </div>
                                @enderror
                            </div>
                            </p>

                            {{-- COPIE --}}
                            <p class="card-text">
                            <div class="mb-3 d-flex align-items-center gap-3 form-copie">
                                <label for="copie" class="form-label">copie</label>
                                <input type="text" placeholder="Copie" name="copie"
                                    class="form-control @error('copie') is-invalid @enderror"
                                    value="{{ old('copie', $book->copie) }}" id="copie">
                                {{-- errore title --}}
                                @error('copie')
                                    <div class="invalid-feedback">
                                        {{ $message }}
                                    </div>
                                @enderror
                            </div>
                            </p>

                            {{-- PAGINE --}}
                            <p class="card-text">
                            <div class="mb-3 d-flex align-items-center gap-3 form-pagine">
                                <label for="pagine" class="form-label">pagine</label>
                                <input type="text" name="pagine"
                                    class="form-control @error('pagine') is-invalid @enderror"
                                    value="{{ old('pagine', $book->pagine) }}" id="pagine">
                                {{-- errore title --}}
                                @error('pagine')
                                    <div class="invalid-feedback">
                                        {{ $message }}
                                    </div>
                                @enderror
                            </div>
                            </p>

                            {{-- GENERE --}}
                            <p class="card-text">
                            <div class="mb-3 d-flex align-items-center gap-3 form-copie">
                                <label for="copie" class="form-label">copie</label>
                                <input type="text" name="copie"
                                    class="form-control @error('copie') is-invalid @enderror"
                                    value="{{ old('copie', $book->copie) }}" id="copie">
                                {{-- errore title --}}
                                @error('copie')
                                    <div class="invalid-feedback">
                                        {{ $message }}
                                    </div>
                                @enderror
                            </div>
                            </p>

                            {{-- SAVE --}}
                            <button type="submit" class="btn btn-success">Save</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
