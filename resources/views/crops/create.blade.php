
<!DOCTYPE html>
<html lang="my">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Add Crop | Smart Farmer Assistant</title>
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>
<body class="min-h-screen bg-green-50 text-gray-800">
    <main class="mx-auto max-w-2xl p-6 sm:p-10">
        <a href="{{ route('crops.index') }}"
           class="text-sm font-medium text-green-800 underline">
            ← Back to Crops
        </a>

        <div class="mt-6 rounded-2xl bg-white p-6 shadow-sm sm:p-8">
            <p class="font-semibold text-green-700">SMART FARMER ASSISTANT</p>
            <h1 class="mt-2 text-2xl font-bold">Add a New Crop</h1>
            <p class="mt-2 text-gray-600">
                မှတ်တမ်းတင်လိုသော သီးနှံအချက်အလက်များကို ဖြည့်ပါ။
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

            @if ($farms->isEmpty())
                <div class="mt-6 rounded-xl bg-amber-50 p-4 text-amber-900">
                    Farm မရှိသေးပါ။ Crop မထည့်ခင် Farm တစ်ခု အရင်ဖန်တီးပါ။
                    <a href="{{ route('farms.create') }}"
                       class="mt-2 block font-semibold underline">
                        + Add Farm
                    </a>
                </div>
            @else
                <form action="{{ route('crops.store') }}" method="POST"
                      class="mt-6 space-y-5">
                    @csrf

                    <div>
                        <label for="farm_id" class="mb-2 block font-medium">
                            Select Farm
                        </label>
                        <select id="farm_id" name="farm_id" required
                                class="w-full rounded-xl border border-gray-300 px-4 py-3">
                            <option value="">-- Choose your farm --</option>
                            @foreach ($farms as $farm)
                                <option value="{{ $farm->id }}"
                                    @selected(old('farm_id') == $farm->id)>
                                    {{ $farm->farm_name }} — {{ $farm->location }}
                                </option>
                            @endforeach
                        </select>
                    </div>

                    <div>
                        <label for="crop_name" class="mb-2 block font-medium">
                            Crop Name
                        </label>
                        <select id="crop_name" name="crop_name" required
                                class="w-full rounded-xl border border-gray-300 px-4 py-3">
                            <option value="">-- Select crop --</option>
                            @foreach (['Onion', 'Sesame', 'Cotton', 'Corn', 'Tomato', 'Peanut', 'Other'] as $cropName)
                                <option value="{{ $cropName }}"
                                    @selected(old('crop_name') === $cropName)>
                                    {{ $cropName }}
                                </option>
                            @endforeach
                        </select>
                    </div>

                    <div>
                        <label for="planting_method" class="mb-2 block font-medium">
                            Planting Method
                        </label>
                        <input id="planting_method" name="planting_method"
                               type="text" value="{{ old('planting_method') }}"
                               placeholder="e.g. Direct seeding"
                               class="w-full rounded-xl border border-gray-300 px-4 py-3">
                    </div>

                    <div>
                        <label for="planting_date" class="mb-2 block font-medium">
                            Planting Date
                        </label>
                        <input id="planting_date" name="planting_date"
                               type="date" value="{{ old('planting_date') }}"
                               class="w-full rounded-xl border border-gray-300 px-4 py-3">
                    </div>

                    <div>
                        <label for="expected_harvest_date" class="mb-2 block font-medium">
                            Expected Harvest Date
                        </label>
                        <input id="expected_harvest_date"
                               name="expected_harvest_date" type="date"
                               value="{{ old('expected_harvest_date') }}"
                               class="w-full rounded-xl border border-gray-300 px-4 py-3">
                    </div>

                    <div>
                        <label for="status" class="mb-2 block font-medium">
                            Crop Status
                        </label>
                        <select id="status" name="status" required
                                class="w-full rounded-xl border border-gray-300 px-4 py-3">
                            @foreach ([
                                'planned' => 'Planned',
                                'planted' => 'Planted',
                                'growing' => 'Growing',
                                'harvested' => 'Harvested',
                            ] as $value => $label)
                                <option value="{{ $value }}"
                                    @selected(old('status', 'planned') === $value)>
                                    {{ $label }}
                                </option>
                            @endforeach
                        </select>
                    </div>

                    <div>
                        <label for="notes" class="mb-2 block font-medium">
                            Notes (Optional)
                        </label>
                        <textarea id="notes" name="notes" rows="3"
                                  class="w-full rounded-xl border border-gray-300 px-4 py-3"
                                  placeholder="Additional planting information">{{ old('notes') }}</textarea>
                    </div>

                    <button type="submit"
                            class="w-full rounded-xl bg-green-700 px-5 py-3 font-semibold text-white hover:bg-green-800">
                        Save Crop
                    </button>
                </form>
            @endif
        </div>
    </main>
</body>
</html>
