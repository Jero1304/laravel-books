@extends('welcome')

@section('content')
create
    <div class="container py-5">
        <form action="{{ route('books.store') }}" method="post">
            @csrf
            {{-- TITOLO --}}
            <div class="mb-3">
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

            <div class="mb-3">
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

            <div class="mb-3">
                <label for="casa_editrice" class="form-label">casa_editrice</label>
                <input type="text" name="casa_editrice" class="form-control @error('casa_editrice') is-invalid @enderror"
                    value="{{ old('casa_editrice') }}" id="casa_editrice">
                {{-- errore title --}}
                @error('casa_editrice')
                    <div class="invalid-feedback">
                        {{ $message }}
                    </div>
                @enderror
            </div>

            <div class="mb-3">
                <label for="copie" class="form-label">copie</label>
                <input type="text" name="copie" class="form-control @error('copie') is-invalid @enderror"
                    value="{{ old('copie') }}" id="copie">
                {{-- errore title --}}
                @error('copie')
                    <div class="invalid-feedback">
                        {{ $message }}
                    </div>
                @enderror
            </div>

            <div class="mb-3">
                <label for="pagine" class="form-label">pagine</label>
                <input type="text" name="pagine" class="form-control @error('pagine') is-invalid @enderror"
                    value="{{ old('pagine') }}" id="pagine">
                {{-- errore title --}}
                @error('pagine')
                    <div class="invalid-feedback">
                        {{ $message }}
                    </div>
                @enderror
            </div>

            <div class="mb-3">
                <label for="isbn" class="form-label">isbn</label>
                <input type="text" name="isbn" class="form-control @error('isbn') is-invalid @enderror"
                    value="{{ old('isbn') }}" id="isbn" >
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
@endsection
