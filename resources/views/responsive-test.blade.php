
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Responsive Design Practice</title>
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>
<body class="bg-gray-100 min-h-screen">

    <nav class="bg-white shadow p-4">
        <div class="max-w-6xl mx-auto flex items-center justify-between">
            <h1 class="text-xl font-bold text-blue-600">MyWebsite</h1>

            <div class="hidden sm:flex gap-4">
                <a href="#" class="text-gray-600 hover:text-blue-600">Home</a>
                <a href="#" class="text-gray-600 hover:text-blue-600">About</a>
                <a href="#" class="text-gray-600 hover:text-blue-600">Contact</a>
            </div>

            <button class="sm:hidden text-gray-700 border rounded px-3 py-1">
                Menu
            </button>
        </div>
    </nav>

    <main class="max-w-6xl mx-auto p-4 sm:p-6">
        <h2 class="text-2xl font-bold mb-2">Dashboard</h2>
        <p class="text-gray-600 mb-6">
            Responsive cards for mobile, tablet and desktop.
        </p>

        <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-4">

            <div class="bg-white rounded-xl shadow p-6">
                <p class="text-gray-500">Total Users</p>
                <h3 class="text-3xl font-bold text-blue-600 mt-2">120</h3>
            </div>

            <div class="bg-white rounded-xl shadow p-6">
                <p class="text-gray-500">Total Orders</p>
                <h3 class="text-3xl font-bold text-green-600 mt-2">85</h3>
            </div>

            <div class="bg-white rounded-xl shadow p-6">
                <p class="text-gray-500">Total Revenue</p>
                <h3 class="text-3xl font-bold text-purple-600 mt-2">$950</h3>
            </div>

        </div>
    </main>

</body>
</html>
