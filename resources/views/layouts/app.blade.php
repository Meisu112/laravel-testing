
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title', 'MyWebsite')</title>
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>
<body class="min-h-screen bg-gray-100">

    <nav class="bg-white shadow p-4">
        <div class="max-w-6xl mx-auto flex items-center justify-between">
            <a href="/layout-test" class="text-xl font-bold text-blue-600">
                MyWebsite
            </a>

            <div class="flex gap-4">
                <a href="/layout-test" class="text-gray-600 hover:text-blue-600">
                    Home
                </a>
                <a href="/responsive-test" class="text-gray-600 hover:text-blue-600">
                    Responsive
                </a>
            </div>
        </div>
    </nav>

    <main class="max-w-6xl mx-auto p-4 sm:p-6">
        @yield('content')
    </main>

    <footer class="text-center text-gray-500 text-sm p-6">
        MyWebsite © 2026
    </footer>

</body>
</html>
