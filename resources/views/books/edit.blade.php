@extends('welcome')

@section('content')
edit
    <div class="container py-5">
        <form action="{{ route('books.update', $book) }}" method="post">
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
