@extends('layout.app')

@section('content')
<h1 class="text-center">Home</h1>
<div class="text-center">


    <a href="{{route('comics.create')}}">add new</a>
</div>


<h1 class="text-center">List of Comics</h1>
<div class="container">
    <div class="row">
        @foreach ($comics as $comic)
        <div class="col-md-4">
            <div class="card mb-3 h-100">
                <img src="{{ $comic->thumb }}" class="card-img-top" alt="{{ $comic->title}}" style="object-fit: cover; height: 600px;">
                <div class="card-body">
                    <h5 class="card-title">{{ $comic->title }}</h5>
                    <p class=" card-text">{{ $comic->description }}</p>
                    <ul class="list-group list-group-flush">
                        <li class="list-group-item"><strong>Price:</strong> {{ $comic->price }}</li>
                        <li class="list-group-item"><strong>Series:</strong> {{ $comic->series }}</li>
                        <li class="list-group-item"><strong>Sale Date:</strong> {{ $comic->sale_date }}</li>
                        <li class="list-group-item"><strong>Type:</strong> {{ $comic->type }}</li>
                        <li class="list-group-item"><strong>Artists:</strong> {{ $comic->artists }}</li>
                        <li class="list-group-item"><strong>Writers:</strong> {{ $comic->writers }}</li>
                    </ul>
                </div>
            </div>
        </div>
        @endforeach
    </div>
</div>



@endsection