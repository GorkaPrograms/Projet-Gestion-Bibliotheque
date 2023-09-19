<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Models\Livre;

class LivreController extends Controller
{
    public function create()
    {
        return view('livres.create');
    }

    // Display a listing of the resource.
    public function index()
    {
        $livres = Livre::all();
        return view('livres.index', compact('livres'));
    }


    // Store a newly created resource in storage.
    public function store(Request $request)
    {
        $request->validate([
            'title' => 'required',
            'author' => 'required',
            'genre' => 'required',
            'publishedOn' => 'required',

        ]);

        $livre = new Livre();
        $livre->title = $request->title;
        $livre->author = $request->author;
        $livre->genre = $request->genre;
        $livre->published_on = $request->publishedOn;
        $livre->save();

        return redirect('/')->with('success', 'ton livre à été ajouté avec succès.');
    }

    // Display the specified resource.
    public function show(Library $library)
    {
        return view('libraries.show', compact('library'));
    }

    // Show the form for editing the specified resource.
    public function edit(Library $library)
    {
        return view('libraries.edit', compact('library'));
    }

    // Update the specified resource in storage.
    public function update(Request $request, Library $library)
    {
        $request->validate([
            'name' => 'required|string|max:255',
            // Add validation rules for other fields
        ]);

        $library->update($request->all());

        return redirect()->route('libraries.index')
            ->with('success', 'Library updated successfully.');
    }

    // Remove the specified resource from storage.
    public function delete(Library $library)
    {
        $library->delete();

        return redirect()->route('libraries.index')
            ->with('success', 'Library deleted successfully.');
    }
}
