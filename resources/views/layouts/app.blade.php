<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title', 'BrightPath Digital Solutions')</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="min-h-screen flex flex-col bg-gray-50 text-gray-800">
    <x-navbar />

    <main class="flex-grow">
        @yield('content')
    </main>

    <x-footer />
</body>
</html>
