<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Book;
use Illuminate\Support\Facades\Auth;  

class BookController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
        $books = Book::where('id', Auth::id())->get();
        return view('books.index', compact('books'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
        return view('books.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        // Debugging
        // dd($request->all());
        //
        $request->validate([
            'book_title' => 'required|string|max:255',
            'book_author' => 'required|string|max:255',
            'year_published' => 'required|integer'
        ]);
        // Using the create method to create a new record in the database
        // \App\Models\Book::create($request->all());
        Book::create([
            'book_title' => $request->book_title,
            'book_author' => $request->book_author,
            'year_published' => $request->year_published,
            'id' => Auth::id(),
        ]);
        return redirect()->route('books.index')->with('success', 'Book created successfully.');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
        $book = \App\Models\Book::findOrFail($id);
        return view('books.edit', compact('book'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
        $request->validate([
            'book_title' => 'required',
            'book_author' => 'required',
            'year_published' => 'required'
        ]);

        $book = \App\Models\Book::findOrFail($id);
        $book->update($request->all());

        return redirect()->route("books.index")->with('success', 'Book updated successfully.');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
        $book = \App\Models\Book::findOrFail($id);
        $book->delete();

        return redirect()->route('books.index')->with('success', 'Book deleted successfully.');
    }
}
