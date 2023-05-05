@extends('welcome')

@section('content')
    <div class="container py-4">
        <h1>Modifica</h1>
    </div>

    <div class="container py-5">
        <div class="box-form-edit">
            <form action="{{ route('books.update', $book) }}" method="post">
                @csrf
                @method('PUT')
                {{-- TITOLO --}}
                <div class="mb-3 form-titolo">
                    <label for="titolo" class="form-label">titolo</label>
                    <input type="text" name="titolo" class="form-control @error('titolo') is-invalid @enderror"
                        value="{{ old('titolo', $book->titolo) }}" id="titolo" aria-describedby="titleHelp">
                    {{-- errore title --}}
                    @error('titolo')
                        <div class="invalid-feedback">
                            {{ $message }}
                        </div>
                    @enderror
                </div>

                <div class="mb-3 form-autore">
                    {{-- <label for="autore" class="form-label">autore</label>
                    <input type="text" name="autore" class="form-control @error('autore') is-invalid @enderror"
                        value="{{ old('autore', $book->autore) }}" id="autore">
                    {{-- errore title --}}
                    {{-- @error('autore')
                        <div class="invalid-feedback">
                            {{ $message }}
                        </div>
                    @enderror --}}
                    {{-- @foreach ($authors as $author)
                        <div class="form-check">
                            <input name="authors[]" class="form-check-input" type="checkbox" value="{{ $author->id }}"
                                id="flexCheckDefault">
                            <label class="form-check-label" for="flexCheckDefault">
                                {{ $author->name }}
                            </label>
                        </div>
                    @endforeach  --}}

                    <div class="">
                        @foreach ($authors as $author)
                            <div class="form-check">
                                <input @checked(in_array($author->id, old('authors', $book->getAuthorsIds()))) 
                                    value="{{ $author->id }}" name="authors[]"
                                    class="form-check-input" type="checkbox" value="{{ $author->id }}"
                                    id="flexCheckDefault">

                                <label class="form-check-label" for="flexCheckDefault">
                                    {{ $author->name }}
                                </label>
                            </div>
                        @endforeach
                        {{-- errore title --}}
                        @error('authors')
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                        @enderror
                    </div>





                </div>

                <div class="mb-3 form-casa">
                    <label for="casa_editrice" class="form-label">casa_editrice</label>
                    <input type="text" name="casa_editrice"
                        class="form-control @error('casa_editrice') is-invalid @enderror"
                        value="{{ old('casa_editrice', $book->casa_editrice) }}" id="casa_editrice">
                    {{-- errore title --}}
                    @error('casa_editrice')
                        <div class="invalid-feedback">
                            {{ $message }}
                        </div>
                    @enderror
                </div>

                {{-- GENERE --}}
                <div class="mb-3 form-copie">
                    <label for="copie" class="form-label">copie</label>
                    <input type="text" name="copie" class="form-control @error('copie') is-invalid @enderror"
                        value="{{ old('copie', $book->copie) }}" id="copie">
                    {{-- errore title --}}
                    @error('copie')
                        <div class="invalid-feedback">
                            {{ $message }}
                        </div>
                    @enderror
                </div>

                <div class="mb-3 form-pagine">
                    <label for="pagine" class="form-label">pagine</label>
                    <input type="text" name="pagine" class="form-control @error('pagine') is-invalid @enderror"
                        value="{{ old('pagine', $book->pagine) }}" id="pagine">
                    {{-- errore title --}}
                    @error('pagine')
                        <div class="invalid-feedback">
                            {{ $message }}
                        </div>
                    @enderror
                </div>

                <div class="mb-3 form-isbn">
                    <label for="isbn" class="form-label">isbn</label>
                    <input type="text" name="isbn" class="form-control @error('isbn') is-invalid @enderror"
                        value="{{ old('isbn', $book->isbn) }}" id="isbn">
                    {{-- errore title --}}
                    @error('isbn')
                        <div class="invalid-feedback">
                            {{ $message }}
                        </div>
                    @enderror
                </div>


                <button type="submit" class="btn btn-success">Save</button>
            </form>
        </div>
    </div>
@endsection
