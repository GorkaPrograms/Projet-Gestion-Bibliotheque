<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Models\Library;

class LibraryController extends Controller
{
    // Display a listing of the resource.
    public function index()
    {
        $libraries = Library::all();
        return view('libraries.index', compact('libraries'));
    }

    // Show the form for creating a new resource.
    public function create()
    {
        return view('libraries.create');
    }

    // Store a newly created resource in storage.
    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required|string|max:255',
            // Add validation rules for other fields
        ]);

        Library::create($request->all());

        return redirect()->route('libraries.index')
            ->with('success', 'Library created successfully.');
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
