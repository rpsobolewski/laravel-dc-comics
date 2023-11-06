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
        $validated = $request->validate(
            [





                'title' => 'required|bail|min:3|max:100',
                'thumb' => 'nullable|image|max:150',
                'price' => 'required|min:1|max:10',
                'series' => 'nullable|min:3|max:100',
                'sale_date' => 'nullable|date',
                'type' => 'nullable|min:3|max:100',
                'artists' => 'nullable|min:3|max:100',
                'writers' => 'nullable|min:3|max:100',



            ]
        );


        $newComic = Comic::create($validated);










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
            $path = Storage::put('comicsImages', $newCover);
            $data['thumb'] = $path;
        }


        $comic->update($data);
        $comics = Comic::all();

        return view('admin.index', ['comics' => $comics]);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Comic $comic)
    {

        if (!is_null($comic->thumb)) {
            Storage::delete($comic->thumb);
        }


        $comic->delete();


        $comics = Comic::all();

        return view('admin.index', ['comics' => $comics])->with('message', 'Well Done, Element Deleted Succeffully');
    }
}
