@extends('layouts.layout')

@section('content')
<div class="container text-center">
<h1 class="text-primary text-center">Aggiorna nuovo Comic</h1>

    @if ($errors -> any())
            <div class="alert alert-danger">
                    <ul>
                            @foreach ($errors -> all() as $error)
                                    <li>
                                        {{ $error }}
                                    </li>
                            @endforeach
                    </ul>
            </div>
    @endif

    <form action="{{ route ('home.update', $comic -> id) }}" method="POST" novalidate>
        @method('PUT')
        @csrf

        <label for="title" class="form-label">Titolo</label>
            <input type="text" id="title" class="form-control"  name="title" value=" {{$comic -> title}}" required>
        <div class="form-text">
                Titolo del comic
        </div>

        <label for="series" class="form-label">Serie</label>
            <input type="text" id="series" class="form-control"  name="series" value=" {{$comic -> series}}" required>
        <div class="form-text">
                Titolo della serie
        </div>

        <label for="sale_date" class="form-label">Uscita</label>
        <input type="date" id="sale_date" class="form-control"  name="sale_date" value=" {{$comic -> sale_date}}" required>
            <div class="form-text">
                    Data di pubblicazione
            </div>

    <label for="type" class="form-label">Tipo</label>
    <input type="text" id="type" class="form-control" name="type" value=" {{$comic -> type}}" required>
        <div class="form-text">
                Tipo di Comics
        </div>

    <label for="price" class="form-label">Prezzo</label>
    <input type="number" id="price" class="form-control" name="price" value=" {{$comic -> price}}" required>
        <div class="form-text">
            Prezzo
        </div>

    <label for="thumb" class="form-label">Immagine</label>
    <input type="url" id="thumb" class="form-control"  name="thumb" value=" {{$comic -> thumb}}" required>
        <div class="form-text">
            Url immagine
        </div>

    <label for="description" class="form-label">Descrizione</label>
    <input type="text" id="description" class="form-control" name="description" value=" {{$comic -> description}}" required>
        <div class="form-text">
            Descrizione
        </div>

        <button type="submit" class="btn btn-success">Invia</button>

    </form>
</div>
@endsection
