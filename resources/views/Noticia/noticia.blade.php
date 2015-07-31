@extends('welcome')

@section('title')
Notícias
@stop


@section('titulo')
Notícias
@stop

@section('content')

    @foreach($noticia as list($not1,$not2))
    <ul>
        <li>
            <h1>{{ $not1 }}</h1>
            <h2>{{ $not2 }}</h2>
        </li>
    </ul>
    @endforeach
       
@stop
