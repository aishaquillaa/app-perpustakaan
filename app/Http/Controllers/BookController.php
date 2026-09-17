<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreBookRequest;

class BookController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $books = [
            ['id' => 1, 'title' => 'Laravel for Beginners', 'author' => 'John Doe', 'year' => 2023],
            ['id' => 2, 'title' => 'Mastering PHP', 'author' => 'Jane Smith', 'year' => 2022],
        ];
        return view('books.index', compact('books'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('books.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreBookRequest $request)
    {
        $validated = $request->validated();
        return redirect()->route('books.index')->with('success', 'Book created successfully!');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        return "BookController@show, id: " . $id;
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        return "BookController@edit, id: " . $id;
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        return "BookController@update, id: " . $id;
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        return "BookController@destroy, id: " . $id;
    }
}
