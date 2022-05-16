<?php

namespace App\Http\Controllers;

use App\Comic;
use Illuminate\Http\Request;
use Exception;

class ComicController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\View\View
     */
    public function index()
    {
        $comicsList = Comic::paginate(5);

        return view('comics.index', compact('comicsList'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('comics.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate(
            [
                'title' =>  'required|string|max:255',
                'description' => 'required|string|min:50',
                'thumb' =>  'required|url| max:255',
                'price' => 'required|numeric',
                'series' => 'required|string|max:255',
                'sale_date' => 'required|date',
                'type' => 'required|string|max:255'
            ]
        );

        $newComic = Comic::create($request->all());
        return redirect(route('comics.show', $newComic))->with('status', 'Success!');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Comic  $comic
     * @return \Illuminate\View\View
     */
    public function show(Comic $comic)
    {
        return view('comics.show', compact('comic'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Comic  $comic
     * @return \Illuminate\Http\Response
     */
    public function edit(Comic $comic)
    {
        return view('comics.edit', compact('comic'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Comic  $comic
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Comic $comic)
    {
        $request->validate(
            [
                'title' =>  'required|string|max:255',
                'description' => 'required|string|min:50',
                'thumb' =>  'required|url| max:255',
                'price' => 'required|numeric',
                'series' => 'required|string|max:255',
                'sale_date' => 'required|date',
                'type' => 'required|string|max:255'
            ]
        );

        $comic->update($request->all());
        return redirect(route('comics.show', $comic))->with('status', 'Updated succesfully!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Comic  $comic
     * @return \Illuminate\Http\Response
     */
    public function destroy(Comic $comic)
    {
        $comic->delete();
        return redirect(route('comics.index'));
    }
}
