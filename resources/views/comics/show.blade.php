@extends('layouts.layout')

@section('content')
    <h1 class="text-primary text-center">Dettaglio Comic</h1>
                <br>
    <div class="container" margin="0 auto">
            <div class="row justify-content-md-center">
                <div class="card " style="width: 18rem;">
                    <img src="{{$comic -> thumb}}" class="card-img-top" alt="...">
                    <div class="card-body">
                    <h5 class="card-title">TITOLO: {{$comic -> title}}</h5>
                    <p class="card-text">DESCRIZIONE: {{$comic -> description}}</p>
                    <p class="card-text">SERIE: {{$comic -> series}}</p>
                    <a href="{{route('home.index')}}" class="btn btn-primary">Catalogo</a>
                    </div>
                </div>
            </div>
    </div>
@endsection
