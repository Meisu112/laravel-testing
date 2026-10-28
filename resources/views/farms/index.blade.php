
<!DOCTYPE html>
<html lang="my">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>My Farms</title>
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>
<body class="min-h-screen bg-green-50 text-gray-800">
    <main class="mx-auto max-w-5xl p-6 sm:p-10">
        <div class="mb-8 flex flex-wrap items-center justify-between gap-4">
            <div>
                <p class="text-sm font-semibold text-green-700">
                    SMART FARMER ASSISTANT
                </p>
                <h1 class="mt-2 text-3xl font-bold">My Farms</h1>
                <p class="mt-2 text-gray-600">
                    Manage your farm information.
                </p>
            </div>

            <a href="{{ route('farms.create') }}"
               class="rounded-xl bg-green-700 px-5 py-3 font-semibold text-white hover:bg-green-800">
                + Add Farm
            </a>
        </div>

        @if (session('success'))
            <div class="mb-5 rounded-lg bg-green-100 p-4 text-green-800">
                {{ session('success') }}
            </div>
        @endif

        @forelse ($farms as $farm)
            <article class="mb-4 rounded-2xl border border-green-100 bg-white p-6 shadow-sm">
                <h2 class="text-xl font-bold">{{ $farm->farm_name }}</h2>

                <p class="mt-2 text-gray-600">
                    Location: {{ $farm->location }}
                </p>

                <p class="mt-1 text-gray-600">
                    Area: {{ number_format($farm->area_acres, 2) }} acres
                </p>

                @if ($farm->description)
                    <p class="mt-3 text-gray-700">{{ $farm->description }}</p>
                @endif
            </article>
        @empty
            <div class="rounded-2xl border border-dashed border-green-300 bg-white p-10 text-center">
                <h2 class="text-xl font-semibold">No farms added yet</h2>
                <p class="mt-2 text-gray-600">
                    Add your first farm to start managing your crops.
                </p>
                <a href="{{ route('farms.create') }}"
                   class="mt-5 inline-block rounded-xl bg-green-700 px-5 py-3 text-white hover:bg-green-800">
                    Add Your First Farm
                </a>
            </div>
        @endforelse

        <a href="{{ url('/farmer-dashboard') }}"
           class="mt-6 inline-block text-green-800 underline">
            Back to Dashboard
        </a>
    </main>
</body>
</html>
