@extends('layout.app')

@section('content')
<div class="container-fluid dc-mainContainer">

    <div class="row justify-content-center">

        <div class="col-8 py-5">
            <a href="{{route('comics.index')}}">Back</a>


            <h1 class="text-center">Edit ID: {{ $comic->id }} - {{ $comic->title }} </h1>

            <div class="bg-light-subtle p-3 rounded rounded-3">

                <form action="{{ route('comics.update', $comic) }}" method="POST" enctype="multipart/form-data">

                    @csrf

                    @method('PUT')

                    <div class="mb-3">

                        <label for="title" class="form-label"><strong>Titolo</strong></label>

                        <input type="text" class="form-control" name="title" id="title" aria-describedby="helpTitle" value="{{ $comic->title }}">
                    </div>
                    <div class="mb-3">

                        <label for="title" class="form-label"><strong>Descrizione</strong></label>

                        <input type="text" class="form-control" name="description" id="description" aria-describedby="helpdescription" rows="3" value="{{ $comic->description }}">
                    </div>

                    <div class="mb-3">

                        <label for="price" class="form-label"><strong>Prezzo</strong></label>

                        <input type="text" class="form-control" name="price" id="price" aria-describedby="helpprice" value="{{ $comic->price }}">

                    </div>

                    <div class="mb-3">

                        <label for="series" class="form-label"><strong>Serie</strong></label>

                        <input type="text" class="form-control" name="series" id="series" aria-describedby="helpseries" value="{{ $comic->series }}">

                    </div>

                    <div class="mb-3">

                        <label for="series" class="form-label"><strong>Data vendita</strong></label>

                        <input type="date" class="form-control" name="sale_date" id="sale_date" aria-describedby="helpseries" value="{{ $comic->sale_date }}">

                    </div>
                    <div class="mb-3">

                        <label for="series" class="form-label"><strong>Tipologia</strong></label>

                        <input type="text" class="form-control" name="type" id="type" aria-describedby="helpseries" value="{{ $comic->type }}">

                    </div>
                    <div class="mb-3">

                        <label for="series" class="form-label"><strong>Artisti</strong></label>

                        <input type="text" class="form-control" name="artists" id="artists" aria-describedby="helpseries" value="{{ $comic->artists }}">

                    </div>
                    <div class="mb-3">

                        <label for="series" class="form-label"><strong>Scrittori</strong></label>

                        <input type="text" class="form-control" name="writers" id="writers" aria-describedby="helpseries" value="{{ $comic->writers }}">

                    </div>

                    <div class="mb-3">

                        <div class="mb-3">

                            <img class=" img-fluid" style="height: 100px" src="{{ $comic->thumb }}" alt="{{ $comic->title }}">
                        </div>

                        <label for="thumb" class="form-label"><strong>Scegli un file per la
                                copertina</strong></label>

                        <input type="file" class="form-control" name="thumb" id="thumb" placeholder="Cerca..." aria-describedby="fileHelpThumb">

                    </div>

                    <button type="submit" class="btn btn-success my-3">SAVE</button>

                </form>


            </div>



        </div>

    </div>

</div>
@endsection