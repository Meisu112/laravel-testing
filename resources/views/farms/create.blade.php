
<!DOCTYPE html>
<html lang="my">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Add Farm</title>
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>
<body class="min-h-screen bg-green-50 text-gray-800">
    <main class="mx-auto max-w-2xl p-6 sm:p-10">
        <a href="{{ route('farms.index') }}"
           class="text-sm font-medium text-green-800 underline">
            ← Back to My Farms
        </a>

        <div class="mt-6 rounded-2xl bg-white p-6 shadow-sm sm:p-8">
            <h1 class="text-2xl font-bold">Add a New Farm</h1>
            <p class="mt-2 text-gray-600">
                Enter your farm details below.
            </p>

            @if ($errors->any())
                <div class="mt-5 rounded-lg bg-red-50 p-4 text-red-700">
                    <ul class="list-inside list-disc">
                        @foreach ($errors->all() as $error)
                            <li>{{ $error }}</li>
                        @endforeach
                    </ul>
                </div>
            @endif

            <form action="{{ route('farms.store') }}" method="POST" class="mt-6 space-y-5">
                @csrf

                <div>
                    <label for="farm_name" class="mb-2 block font-medium">
                        Farm Name
                    </label>
                    <input id="farm_name" name="farm_name" type="text"
                           value="{{ old('farm_name') }}" required
                           class="w-full rounded-xl border border-gray-300 px-4 py-3 focus:border-green-600 focus:outline-none"
                           placeholder="e.g. Family Farm">
                </div>

                <div>
                    <label for="location" class="mb-2 block font-medium">
                        Location
                    </label>
                    <input id="location" name="location" type="text"
                           value="{{ old('location') }}" required
                           class="w-full rounded-xl border border-gray-300 px-4 py-3 focus:border-green-600 focus:outline-none"
                           placeholder="e.g. Ma Hlaing Township">
                </div>

                <div>
                    <label for="area_acres" class="mb-2 block font-medium">
                        Area (acres)
                    </label>
                    <input id="area_acres" name="area_acres" type="number"
                           min="0.01" step="0.01" value="{{ old('area_acres') }}"
                           required
                           class="w-full rounded-xl border border-gray-300 px-4 py-3 focus:border-green-600 focus:outline-none"
                           placeholder="e.g. 3.50">
                </div>

                <div>
                    <label for="description" class="mb-2 block font-medium">
                        Description (optional)
                    </label>
                    <textarea id="description" name="description" rows="3"
                              class="w-full rounded-xl border border-gray-300 px-4 py-3 focus:border-green-600 focus:outline-none"
                              placeholder="Describe your farm">{{ old('description') }}</textarea>
                </div>

                <button type="submit"
                        class="w-full rounded-xl bg-green-700 px-5 py-3 font-semibold text-white hover:bg-green-800">
                    Save Farm
                </button>
            </form>
        </div>
    </main>
</body>
</html>
