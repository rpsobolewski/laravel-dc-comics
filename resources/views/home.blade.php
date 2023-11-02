@extends('layout.app')

@section('content')
<h1>home</h1>
<a href="{{route('comics.create')}}">add new</a>


<h1>List of Trains</h1>
<ul>
    @foreach ($comics as $comic)
    <p>{{ $comic->title}}</p>
    @endforeach
</ul>
@endsection