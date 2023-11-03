@extends('layout.app')

@section('content')
<div class="container-fluid">

    <div class="row justify-content-center">

        <h1 class=" text-center my-3">DETAILS </h1>

        <div class="col-8 py-5 ">

            <div class="col-2">
                <a class="btn btn-info mb-5" href="{{ route('comics.index') }}">Back</a>
                @if (str_contains($comic->thumb, 'http'))
                <td><img class=" img-fluid" style="height: 250px" src="{{ $comic->thumb }}" alt="{{ $comic->title }}">
                </td>
                @else
                <td><img class=" img-fluid" style="height: 250px" src="{{ asset('storage/' . $comic->thumb) }}">
                </td>
                @endif
            </div>

            <div class="row">

                <div class="col-8">

                    <h2 class="text-uppercase fw-bold text-dark">{{ $comic->title }}</h2>

                    <p><strong>Description: </strong>{{ $comic->description }}</p>

                    <p><strong>Artists: </strong>{{ $comic->artists }}</p>

                    <p><strong>Writers: </strong>{{ $comic->writers }}</p>



                </div>


            </div>

        </div>

    </div>

</div>
@endsection