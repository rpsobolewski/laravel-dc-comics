@extends('layout.app')

@section('content')
<h1 class="text-center">Admin</h1>
<div class="text-center">


    <a class="btn btn-success" href="{{route('comics.create')}}">Add new</a>
    <a class="btn btn-primary" href="{{route('home')}}">Home</a>

</div>

<style>
    .card-img-left img {
        height: 200px;
        object-fit: cover;
    }
</style>

<div class="container">
    <h1 class="text-center">List of Comics</h1>
    <div class="row">
        @foreach ($comics as $comic)
        <div class="col-12 mb-4">
            <div class="card flex-row">
                <div class="card-img-left">
                    <img src="{{ $comic->thumb }}" alt="{{ $comic->title }}">
                </div>
                <div class="card-body">
                    <h5 class="card-title">{{ $comic->title }}</h5>
                    <p class="card-text">ID: {{ $comic->id }}</p>
                    <div class="btn-group">
                        <a href="{{ route('comics.show', $comic->id) }}" class="btn btn-info mx-1">Details</a>

                        <a href="{{ route('comics.edit', $comic->id) }}" class="btn btn-warning mx-1">Edit</a>
                        <form action="{{ route('comics.destroy', $comic->id) }}" method="POST" class="d-inline">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="btn btn-danger">Delete</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
        @endforeach
    </div>
</div>



@endsection