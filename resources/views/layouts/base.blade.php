<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pokemon System</title>
</head>
<body class="bg-gradient-to-b from-gray-900 to-black text-white">
    <nav class="flex items-center justify-between bg-teal-500 p-4">
        <div class="flex space-x-4">
            <a href="{{ url('pokemon') }}" class="text-white hover:text-gray-200">Ver Pokemon |</a>
            <a href="{{ url('coaches') }}" class="text-white hover:text-gray-200"> Ver Coach</a>
        </div>
    </nav>

    <div class="container mx-auto p-4">
        @yield('content')
    </div>
</body>
</html>
