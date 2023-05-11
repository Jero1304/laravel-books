@extends('welcome')

@section('content')
    <div class="container py-5">
        <h1 class="d-flex justify-content-center pb-5"><span class="badge bg-success">Create Book</span></h1>

        <div class="d-flex justify-content-center">
            <div class="box-form">
                <form class="text-capitalize row justify-content-center" action="{{ route('books.store') }}" method="post">
                    @csrf

                    <div class="row justify-content-center">
                        {{-- TITOLO --}}
                        <div class="mb-3 form-titolo">
                            <label for="titolo" class="form-label"></label>
                            <input type="text" placeholder="Titolo" name="titolo"
                                class="form-control @error('titolo') is-invalid @enderror" value="{{ old('titolo') }}"
                                id="titolo" aria-describedby="titleHelp">
                            {{-- errore title --}}
                            @error('titolo')
                                <div class="invalid-feedback">
                                    {{ $message }}
                                </div>
                            @enderror
                        </div>

                        {{-- CASA --}}
                        <div class="mb-3 form-casa">
                            <label for="casa_editrice" class="form-label"></label>
                            <input type="text" placeholder="Casa Editrice" name="casa_editrice"
                                class="form-control @error('casa_editrice') is-invalid @enderror"
                                value="{{ old('casa_editrice') }}" id="casa_editrice">
                            {{-- errore title --}}
                            @error('casa_editrice')
                                <div class="invalid-feedback">
                                    {{ $message }}
                                </div>
                            @enderror
                        </div>
                    </div>

                    <div class="row flex-column align-items-center justify-content-center">
                        {{-- AUTORE --}}
                        <div class="col-5 pt-3 mb-3 m-0 form-autore">
                            <div class="accordion accordion-flush w-auto" id="accordionFlushExample">
                                <div class="accordion-item">
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
                                                    <input name="authors[]" class="form-check-input" type="checkbox"
                                                        value="{{ $author->id }}" id="flexCheckDefault">
                                                    <label class="form-check-label" for="flexCheckDefault">
                                                        {{ $author->name }}
                                                    </label>
                                                </div>
                                            @endforeach
                                        </div>
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

                        {{-- GENERE --}}
                        <div class="col-5 mb-3 form-genere">
                            <label for="genre-id" class="form-label"></label>
                            <select class="form-select @error('genre_id') is-invalid @enderror" id="genre-id"
                                name="genre_id" aria-label="Default select example">
                                <option value="" selected>Seleziona genere</option>
                                @foreach ($genres as $genre)
                                    <option @selected(old('genre_id') == $genre->id) value="{{ $genre->id }}">
                                        {{ $genre->name }}
                                    </option>
                                @endforeach
                            </select>

                            {{-- errore genre --}}
                            @error('genre_id')
                                <div class="invalid-feedback">
                                    {{ $message }}
                                </div>
                            @enderror
                        </div>

                    </div>

                    <div class="row justify-content-center">
                        {{-- COPIE --}}
                        <div class="mb-3 form-copie">
                            <label for="copie" class="form-label"></label>
                            <input type="number" placeholder="Copie" name="copie"
                                class="form-control @error('copie') is-invalid @enderror" value="{{ old('copie') }}"
                                id="copie">
                            {{-- errore title --}}
                            @error('copie')
                                <div class="invalid-feedback">
                                    {{ $message }}
                                </div>
                            @enderror
                        </div>

                        {{-- ISBN --}}
                        <div class="mb-3 form-isbn">
                            <label for="isbn" class="form-label"></label>
                            <input type="number" placeholder="ISBN" name="isbn"
                                class="form-control @error('isbn') is-invalid @enderror" value="{{ old('isbn') }}"
                                id="isbn">
                            {{-- errore title --}}
                            @error('isbn')
                                <div class="invalid-feedback">
                                    {{ $message }}
                                </div>
                            @enderror
                        </div>

                        {{-- PAGINE --}}
                        <div class="mb-3 form-pagine">
                            <label for="pagine" class="form-label"></label>
                            <input type="number" placeholder="Pagine" name="pagine"
                                class="form-control @error('pagine') is-invalid @enderror" value="{{ old('pagine') }}"
                                id="pagine">
                            {{-- errore title --}}
                            @error('pagine')
                                <div class="invalid-feedback">
                                    {{ $message }}
                                </div>
                            @enderror
                        </div>
                    </div>


                    {{-- BOTTONE --}}
                    <div class="button-save d-flex justify-content-center pt-1">
                        <button type="submit" class="btn btn-success">Save</button>
                    </div>
            </div>

            </form>
        </div>
    </div>
    </div>
@endsection
