@extends('layouts.layout')

@if ( session('message') )
    <div class="alert alert-success">
        {{ session('message') }}
    </div>
@endif

@section('content')
        <h1 class="text-primary text-center">Comic Catalogue</h1>
        <br>
        <a href=" {{ route('home.create') }} " class="btn btn-primary">Crea Comic</a>
        <table class="table">
            <thead>
              <tr>
                <th scope="col">Copertina</th>
                <th scope="col">Titolo</th>
                <th scope="col">Tipo</th>
                <th scope="col">Serie</th>
                <th scope="col">Prezzo</th>
                <th scope="col">Uscita</th>
                <th scope="col">Descrizione</th>
                <th scope="col">Options</th>
              </tr>
        </thead>
            <tbody>
              {{-- <tr>
                <th scope="row">1</th>
                <td>Mark</td>
                <td>Otto</td>
                <td>@mdo</td>
              </tr> --}}

                @forelse ($comics as $comic)
                <tr>
                    <td>
                        <img src="{{$comic -> thumb}}" alt="" width="50px">
                    </td>
                    <td>{{$comic -> title}}</td>
                    <td>{{$comic -> type}}</td>
                    <td>{{$comic -> series}}</td>
                    <td>€{{$comic -> price}}</td>
                    <td>{{$comic -> sale_date}}</td>
                    <td>{{$comic -> description}}</td>
                    <td>
                        <a href=" {{ route('home.show',  $comic -> id) }} " class="btn btn-primary">View</a>
                        <a href=" {{ route('home.edit',  $comic -> id) }} " class="btn btn-warning">Modifica</a>
                            <form action="{{ route( 'home.destroy', $comic->id ) }}"
                                method="POST"
                                class="delete-form"
                                data-name="{{ $comic->title }}"
                                >
                                @method('DELETE')
                                @csrf
                                <button class="btn btn-danger" type="submit">Elimina</button>
                            </form>
                    </td>
                </tr>
                @empty
                    <h2>Il database è vuoto</h2>
                @endforelse

            </tbody>
        </table>
@endsection
