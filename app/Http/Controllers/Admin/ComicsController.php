<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Comic;
use Illuminate\Support\Facades\Storage;

class ComicsController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $comics = Comic::all();

        return view('admin.index', ['comics' => $comics]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('admin.add');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $newComic = new Comic();

        if ($request->has('thumb')) {

            $file_path = Storage::put('comics_thumbs', $request->thumb);


            $newComic->thumb = $file_path;
        }
        $newComic->title = $request->title;
        $newComic->price = $request->price;
        $newComic->series = $request->series;
        $newComic->sale_date = $request->sale_date;
        $newComic->type = $request->type;
        $newComic->artists = $request->artists;
        $newComic->writers = $request->writers;










        $newComic->save();

        $comics = Comic::all();

        return view('admin.index', ['comics' => $comics]);
    }

    /**
     * Display the specified resource.
     */
    public function show(Comic $comic)
    {
        return view('admin.details', compact('comic'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Comic $comic)
    {
        return view('admin.edit', compact('comic'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Comic $comic)
    {
        $data = $request->all();


        if ($request->has('thumb') && $comic->thumb) {


            Storage::delete($comic->thumb);


            $newCover = $request->thumb;
            $path = Storage::put('comics_thumbs', $newCover);
            $data['thumb'] = $path;
        }

        // AGGIORNA L'ENTITA' CON I VALORI DI $data
        $comic->update($data);
        $comics = Comic::all();

        return view('admin.index', ['comics' => $comics]);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
