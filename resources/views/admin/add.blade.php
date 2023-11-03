@extends('layout.app')

@section('content')
<h1 class="text-center">Add New</h1>
<div class="text-center">


    <a class="btn btn-info" href="{{route('comics.index')}}">Back</a>
</div>

<div class="container-fluid dc-mainContainer">

    <div class="row justify-content-center">

        <div class="col-8 py-5">


            <div class="bg-light-subtle p-3 rounded rounded-3">

                <form action="{{ route('comics.store') }}" method="POST" enctype="multipart/form-data">

                    @csrf

                    <div class="mb-3">

                        <label for="title" class="form-label"><strong>Titolo</strong></label>

                        <input type="text" class="form-control" name="title" id="title" aria-describedby="helpTitle" placeholder="Inserisci il titolo del prodotto">
                    </div>

                    <div class="mb-3">

                        <label for="title" class="form-label"><strong>Descrizione</strong></label>

                        <textarea class="form-control" name="description" id="description" aria-describedby="helpdescription" placeholder="Inserisci la descrizione del prodotto" rows="3"></textarea>
                    </div>

                    <div class="mb-3">

                        <label for="price" class="form-label"><strong>Prezzo</strong></label>

                        <input type="text" class="form-control" name="price" id="price" aria-describedby="helpprice" placeholder="Inserisci il prezzo del prodotto">

                    </div>

                    <div class="mb-3">

                        <label for="series" class="form-label"><strong>Serie</strong></label>

                        <input type="text" class="form-control" name="series" id="series" aria-describedby="helpseries" placeholder="Inserisci la serie del prodotto">

                    </div>
                    <div class="mb-3">

                        <label for="series" class="form-label"><strong>Data vendita</strong></label>

                        <input type="date" class="form-control" name="sale_date" id="sale_date" aria-describedby="helpseries">

                    </div>
                    <div class="mb-3">

                        <label for="series" class="form-label"><strong>Tipologia</strong></label>

                        <input type="text" class="form-control" name="type" id="type" aria-describedby="helpseries" placeholder="Inserisci la tipologia">

                    </div>
                    <div class="mb-3">

                        <label for="series" class="form-label"><strong>Artisti</strong></label>

                        <input type="text" class="form-control" name="artists" id="artists" aria-describedby="helpseries" placeholder="Inserisci gli artisti">

                    </div>
                    <div class="mb-3">

                        <label for="series" class="form-label"><strong>Scrittori</strong></label>

                        <input type="text" class="form-control" name="writers" id="writers" aria-describedby="helpseries" placeholder="Inserisci gli scrittori">

                    </div>

                    <div class="mb-3">

                        <label for="thumb" class="form-label"><strong></strong></label>

                        <input type="file" class="form-control" name="thumb" id="thumb" placeholder="Cerca..." aria-describedby="fileHelpThumb">

                    </div>


                    <button type="submit" class="btn btn-success my-3">SAVE</button>

                </form>


            </div>



        </div>

    </div>

</div>
@endsection