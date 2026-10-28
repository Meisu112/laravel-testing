
<!DOCTYPE html>
<html lang="my">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Crop Management | Smart Farmer</title>
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>
<body class="min-h-screen bg-green-50 p-5 sm:p-8">

<div class="mx-auto max-w-5xl">

    <div class="mb-6 flex flex-wrap items-center justify-between gap-4">
        <div>
            <h1 class="text-3xl font-bold text-green-900">
                🌱 Crop Management
            </h1>
            <p class="mt-2 text-sm text-gray-600">
                သီးနှံစိုက်ပျိုးမှု မှတ်တမ်းများ
            </p>
        </div>

        <a href="{{ route('crops.create') }}"
           class="rounded-lg bg-green-700 px-5 py-3 font-semibold text-white hover:bg-green-800">
            + Add Crop
        </a>
    </div>

    @if (session('success'))
        <div class="mb-5 rounded-lg bg-green-100 p-4 text-green-800">
            {{ session('success') }}
        </div>
    @endif

    @forelse ($crops as $crop)
        <article class="mb-4 rounded-2xl border border-green-100 bg-white p-5 shadow-sm">
            <div class="flex flex-wrap items-start justify-between gap-3">
                <div>
                    <h2 class="text-xl font-bold text-green-800">
                        🌿 {{ $crop->crop_name }}
                    </h2>

                    <p class="mt-2 text-sm text-gray-600">
                        🏡 Farm: {{ $crop->farm->farm_name ?? 'Unknown Farm' }}
                    </p>

                    <p class="mt-1 text-sm text-gray-600">
                        📅 စိုက်ပျိုးရက်:
                        {{ $crop->planting_date?->format('d M Y') ?? 'မသတ်မှတ်ရသေးပါ' }}
                    </p>

                    <p class="mt-1 text-sm text-gray-600">
                        🌾 ခန့်မှန်းရိတ်သိမ်းရက်:
                        {{ $crop->expected_harvest_date?->format('d M Y') ?? 'မသတ်မှတ်ရသေးပါ' }}
                    </p>

                    @if ($crop->planting_method)
                        <p class="mt-1 text-sm text-gray-600">
                            စိုက်ပျိုးနည်း: {{ $crop->planting_method }}
                        </p>
                    @endif

                </div>

                <span class="rounded-full bg-green-100 px-3 py-1 text-sm font-semibold text-green-800">
                    {{ ucfirst($crop->status) }}
                </span>

                <div class="flex flex-wrap items-center gap-2">
                    <a
                        href="{{ route('crops.edit', $crop) }}"
                        class="inline-block rounded-lg bg-green-700 px-4 py-2 text-white hover:bg-green-800"
                    >
                        Edit Crop
                    </a>

                    <form
                        action="{{ route('crops.destroy', $crop) }}"
                        method="POST"
                        onsubmit="return confirm('ဒီ Crop ကို တကယ်ဖျက်မှာ သေချာပါသလား?');"
                    >
                        @csrf
                        @method('DELETE')

                        <button
                            type="submit"
                            class="inline-block rounded-lg bg-red-600 px-4 py-2 text-white hover:bg-red-700"
                        >
                            Delete Crop
                        </button>
                    </form>
                </div>

            </div>

            @if ($crop->notes)
                <p class="mt-4 rounded-lg bg-gray-50 p-3 text-sm text-gray-700">
                    မှတ်ချက်: {{ $crop->notes }}
                </p>
            @endif
        </article>
    @empty
        <div class="rounded-2xl border border-dashed border-green-300 bg-white p-10 text-center">
            <div class="text-5xl">🌱</div>
            <h2 class="mt-4 text-xl font-bold text-gray-800">
                Crop မရှိသေးပါ
            </h2>
            <p class="mt-2 text-sm text-gray-600">
                Add Crop ကိုနှိပ်ပြီး ပထမဆုံးသီးနှံမှတ်တမ်းကို ထည့်ပါ။
            </p>
            <a href="{{ route('crops.create') }}"
               class="mt-5 inline-block rounded-lg bg-green-700 px-5 py-3 font-semibold text-white">
                + Add Your First Crop
            </a>
        </div>
    @endforelse

    <a href="{{ url('/farmer-dashboard') }}"
       class="mt-5 inline-block font-semibold text-green-700 hover:underline">
        ← Back to Dashboard
    </a>

</div>
</body>
</html>
