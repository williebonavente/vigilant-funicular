<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Dashboard</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="bg-gray-100 text-gray-900">
    <nav class="bg-blue-500 p-4 text-white flex justify-between items-center">
        <a href="{{ route('books.index') }}" class="font-bold">Books</a>
        <form action="{{ route('logout') }}" method="POST" class="inline ml-auto">
            @csrf
            <button type="submit" class="ml-4 font-bold">Logout</button>
        </form>
    </nav>
    <div class="container mx-auto mt-6">
        <h1 class="text-4xl font-bold mb-4 text-center">Welcome to Your Dashboard!</h1>
        <p class="text-lg mb-6 text-center">We're glad to have you back. Here's what's happening today:</p>
        <div class="flex justify-center">
            <div class="bg-blue-500 text-white p-4 rounded-lg shadow-lg mx-2">
                <h2 class="text-2xl font-bold">New Books</h2>
                <p class="text-sm">Check out the latest additions to our collection.</p>
            </div>
            <div class="bg-green-500 text-white p-4 rounded-lg shadow-lg mx-2">
                <h2 class="text-2xl font-bold">Your Favorites</h2>
                <p class="text-sm">View and manage your favorite books.</p>
            </div>
            <div class="bg-yellow-500 text-white p-4 rounded-lg shadow-lg mx-2">
                <h2 class="text-2xl font-bold">Recommendations</h2>
                <p class="text-sm">Personalized book recommendations just for you.</p>
            </div>
        </div>
    </div>
</body>
</html>