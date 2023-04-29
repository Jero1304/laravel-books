@extends('welcome')

@section('content')
    <div class="container py-5">

        <h1 class="d-flex justify-content-center pb-5"><span class="badge bg-success">Create Book</span></h1>

        <div class="d-flex justify-content-center">
            <div class="box-form">
                <form class="text-capitalize row" action="{{ route('books.store') }}" method="post">
                    @csrf
                    {{-- TITOLO --}}
                    <div class="mb-3 form-titolo">
                        <label for="titolo" class="form-label">titolo</label>
                        <input type="text" name="titolo" class="form-control @error('titolo') is-invalid @enderror"
                            value="{{ old('titolo') }}" id="titolo" aria-describedby="titleHelp">
                        {{-- errore title --}}
                        @error('titolo')
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                        @enderror
                    </div>

                    {{-- AUTORE --}}
                    <div class="mb-3 form-autore">
                        <label for="autore" class="form-label">autore</label>
                        <input type="text" name="autore" class="form-control @error('autore') is-invalid @enderror"
                            value="{{ old('autore') }}" id="autore">
                        {{-- errore title --}}
                        @error('autore')
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                        @enderror
                    </div>

                    {{-- CASA --}}
                    <div class="mb-3 form-casa">
                        <label for="casa_editrice" class="form-label">casa_editrice</label>
                        <input type="text" name="casa_editrice"
                            class="form-control @error('casa_editrice') is-invalid @enderror"
                            value="{{ old('casa_editrice') }}" id="casa_editrice">
                        {{-- errore title --}}
                        @error('casa_editrice')
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                        @enderror
                    </div>

                    {{-- GENERE --}}
                    <div class="mb-3 form-genere">
                        <label for="genre-id" class="form-label">genre</label>

                        <select class="form-select @error('genre_id') is-invalid @enderror" id="genre-id" name="genre_id"
                            aria-label="Default select example">
                            <option value="" selected>Seleziona categoria</option>
                            @foreach ($genres as $genre)
                                <option @selected(old('genre_id') == $genre->id) value="{{ $genre->id }}">{{ $genre->name }}
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

                    {{-- COPIE --}}
                    <div class="mb-3 form-copie">
                        <label for="copie" class="form-label">copie</label>
                        <input type="number" name="copie" class="form-control @error('copie') is-invalid @enderror"
                            value="{{ old('copie') }}" id="copie">
                        {{-- errore title --}}
                        @error('copie')
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                        @enderror
                    </div>

                    {{-- PAGINE --}}
                    <div class="mb-3 form-pagine">
                        <label for="pagine" class="form-label">pagine</label>
                        <input type="number" name="pagine" class="form-control @error('pagine') is-invalid @enderror"
                            value="{{ old('pagine') }}" id="pagine">
                        {{-- errore title --}}
                        @error('pagine')
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                        @enderror
                    </div>

                    {{-- ISBN --}}
                    <div class="mb-3 form-isbn">
                        <label for="isbn" class="form-label">isbn</label>
                        <input type="number" name="isbn" class="form-control @error('isbn') is-invalid @enderror"
                            value="{{ old('isbn') }}" id="isbn">
                        {{-- errore title --}}
                        @error('isbn')
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                        @enderror
                    </div>

                    {{-- BOTTONE --}}
                    <div class="button-save d-flex justify-content-center pt-3">
                        <button type="submit" class="btn btn-success">Save</button>
                    </div>

                </form>
            </div>
        </div>
    </div>
@endsection
