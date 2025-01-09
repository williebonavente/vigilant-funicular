@extends('layouts.app')

@section('content')
<h1 class="text-2xl font-bold">Add New Book</h1>
<form action="{{ route('books.store') }}" method="POST" class="mt-5 bg-white p-6 shadow-lg rounded">
    @csrf
    <div class="mb-4">
        <label for="book_title" class="block text-gray-700">Title:</label>
        <input type="text" name="book_title" id="book_title" class="w-full border rounded px-3 py-2" required>
    </div>
    <div class="mb-4">
        <label for="book_author" class="block text-gray-700">Author:</label>
        <input type="text" name="book_author" id="book_author" class="w-full border rounded px-3 py-2" required>
    </div>
    <div class="mb-4">
        <label for="year_book" class="block text-gray-700">Year:</label>
        <input type="number" name="year_book" id="year_book" class="w-full border rounded px-3 py-2" required>
    </div>
    <button type="submit" class="bg-blue-500 text-white px-4 py-2 rounded">Save</button>
</form>
@endsection
