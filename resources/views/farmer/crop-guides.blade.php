
<!DOCTYPE html>
<html lang="my">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Crop Growing Guides | Smart Farmer</title>
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>

<body class="min-h-screen bg-green-50 p-5 sm:p-8">
    <main class="mx-auto max-w-6xl">


        <header class="my-6">
            <h1 class="text-3xl font-bold text-green-900">
                🌱 Crop Growing Guides
            </h1>
            <p class="mt-2 text-gray-600">
                သီးနှံအလိုက် စိုက်ပျိုးနည်းများကို လေ့လာပါ။
            </p>
        </header>

        @php
            $guides = [
                ['name' => 'Onion', 'myanmar' => 'ကြက်သွန်နီ', 'icon' => '🧅'],
                ['name' => 'Sesame', 'myanmar' => 'နှမ်း', 'icon' => '🌾'],
                ['name' => 'Cotton', 'myanmar' => 'ဝါ', 'icon' => '☁️'],
                ['name' => 'Corn', 'myanmar' => 'ပြောင်း', 'icon' => '🌽'],
                ['name' => 'Tomato', 'myanmar' => 'ခရမ်းချဉ်သီး', 'icon' => '🍅'],
                ['name' => 'Peanut', 'myanmar' => 'မြေပဲ', 'icon' => '🥜'],
            ];
        @endphp

        <div class="grid grid-cols-1 gap-5 sm:grid-cols-2 lg:grid-cols-3">
            @foreach ($guides as $guide)
                <article class="rounded-2xl border border-green-100 bg-white p-6 shadow-sm">
                    <div class="text-4xl">{{ $guide['icon'] }}</div>

                    <h2 class="mt-4 text-xl font-bold text-green-800">
                        {{ $guide['name'] }}
                    </h2>

                    <p class="mt-1 text-gray-600">
                        {{ $guide['myanmar'] }}
                    </p>

                    <a href="{{ route('crop-guides.show', strtolower($guide['name'])) }}"
                       class="mt-5 inline-block rounded-lg bg-green-700 px-4 py-2 font-semibold text-white hover:bg-green-800">
                        View Guide →
                    </a>
                </article>
            @endforeach
        </div>


<div class="mt-16 flex justify-end border-t border-green-200 pt-8">
    <a href="{{ url('/farmer-dashboard') }}"
       class="inline-flex items-center gap-2 rounded-xl bg-green-700 px-6 py-3 font-semibold text-white shadow-sm transition hover:bg-green-800">
        ← Back to Dashboard
    </a>
</div>



    </main>
</body>
</html>
