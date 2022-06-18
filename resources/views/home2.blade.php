@extends('layouts.layout')

<h1 class="text-primary text-center">Comics</h1>

@forelse ($comics as $comic)

    <h1>{{$comic -> title}}</h1>

@empty
        <h2>Il database è vuoto</h2>
@endforelse
