@extends('layouts.app')

@section('content')
<div class="flex justify-between items-center">
    <h1 class="text-2xl font-bold">Books</h1>
    <a href="{{ route('books.create') }}" class="bg-green-500 text-white px-4 py-2 rounded">Add Book</a>
</div>

@if(session('success'))
    <div class="bg-green-100 text-green-800 p-2 my-4 rounded">
        {{ session('success') }}
    </div>
@endif

<table class="w-full mt-5 bg-white shadow-lg">
    <thead>
        <tr>
            <th class="border px-4 py-2">Title</th>
            <th class="border px-4 py-2">Author</th>
            <th class="border px-4 py-2">Year</th>
            <th class="border px-4 py-2">Actions</th>
        </tr>
    </thead>
    <tbody>
        @foreach($books as $book)
        <tr>
            <td class="border px-4 py-2">{{ $book->book_title }}</td>
            <td class="border px-4 py-2">{{ $book->book_author }}</td>
            <td class="border px-4 py-2">{{ $book->year_book }}</td>
            <td class="border px-4 py-2">
                <a href="{{ route('books.edit', $book->id) }}" class="text-blue-500">Edit</a> |
                <form action="{{ route('books.destroy', $book->id) }}" method="POST" class="inline">
                    @csrf
                    @method('DELETE')
                    <button type="submit" class="text-red-500">Delete</button>
                </form>
            </td>
        </tr>
        @endforeach
    </tbody>
</table>
@endsection

