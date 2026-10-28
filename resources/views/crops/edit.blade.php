
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit Crop | Smart Farmer Assistant</title>
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>

<body class="min-h-screen bg-green-50 text-gray-800">

    <div class="mx-auto max-w-3xl px-4 py-10">

        <div class="mb-6">
            <a href="{{ route('crops.index') }}"
               class="text-sm font-medium text-green-700 hover:text-green-900">
                ← Back to Crops
            </a>

            <h1 class="mt-4 text-3xl font-bold text-green-900">
                Edit Crop
            </h1>

            <p class="mt-2 text-gray-600">
                Update your crop information and growing status.
            </p>
        </div>

        <div class="rounded-2xl bg-white p-6 shadow-sm ring-1 ring-green-100 sm:p-8">

            @if ($errors->any())
                <div class="mb-6 rounded-lg bg-red-50 p-4 text-sm text-red-700">
                    <p class="mb-2 font-semibold">
                        Please check the following errors:
                    </p>

                    <ul class="list-inside list-disc">
                        @foreach ($errors->all() as $error)
                            <li>{{ $error }}</li>
                        @endforeach
                    </ul>
                </div>
            @endif

            <form action="{{ route('crops.update', $crop) }}" method="POST"
                  class="space-y-5">
                @csrf
                @method('PUT')

                {{-- Select Farm --}}
                <div>
                    <label for="farm_id"
                           class="mb-2 block text-sm font-semibold text-gray-700">
                        Farm <span class="text-red-500">*</span>
                    </label>

                    <select id="farm_id" name="farm_id" required
                            class="w-full rounded-lg border border-gray-300 px-4 py-3 focus:border-green-600 focus:outline-none focus:ring-2 focus:ring-green-100">
                        <option value="">Select a farm</option>

                        @foreach ($farms as $farm)
                            <option value="{{ $farm->id }}"
                                @selected((string) old('farm_id', $crop->farm_id) === (string) $farm->id)>
                                {{ $farm->farm_name }}
                                @if ($farm->location)
                                    — {{ $farm->location }}
                                @endif
                            </option>
                        @endforeach
                    </select>

                    @if ($farms->isEmpty())
                        <p class="mt-2 text-sm text-red-600">
                            You need to add a farm before editing this crop.
                        </p>
                    @endif
                </div>

                {{-- Crop Name --}}
                <div>
                    <label for="crop_name"
                           class="mb-2 block text-sm font-semibold text-gray-700">
                        Crop Name <span class="text-red-500">*</span>
                    </label>

                    <select id="crop_name" name="crop_name" required
                            class="w-full rounded-lg border border-gray-300 px-4 py-3 focus:border-green-600 focus:outline-none focus:ring-2 focus:ring-green-100">
                        <option value="">Select a crop</option>

                        @foreach ([
                            'ကြက်သွန်နီ',
                            'နှမ်း',
                            'ဝါ',
                            'ပြောင်း',
                            'ခရမ်းချဉ်သီး',
                            'မြေပဲ',
                        ] as $cropName)
                            <option value="{{ $cropName }}"
                                @selected(old('crop_name', $crop->crop_name) === $cropName)>
                                {{ $cropName }}
                            </option>
                        @endforeach

                        {{-- Keep an existing crop name if it is not in the list --}}
                        @if (!in_array($crop->crop_name, [
                            'ကြက်သွန်နီ',
                            'နှမ်း',
                            'ဝါ',
                            'ပြောင်း',
                            'ခရမ်းချဉ်သီး',
                            'မြေပဲ',
                        ], true))
                            <option value="{{ $crop->crop_name }}"
                                @selected(old('crop_name', $crop->crop_name) === $crop->crop_name)>
                                {{ $crop->crop_name }}
                            </option>
                        @endif
                    </select>
                </div>

                {{-- Planting Method --}}
                <div>
                    <label for="planting_method"
                           class="mb-2 block text-sm font-semibold text-gray-700">
                        Planting Method
                    </label>

                    <input type="text" id="planting_method"
                           name="planting_method"
                           value="{{ old('planting_method', $crop->planting_method) }}"
                           placeholder="e.g. Direct seeding"
                           class="w-full rounded-lg border border-gray-300 px-4 py-3 focus:border-green-600 focus:outline-none focus:ring-2 focus:ring-green-100">
                </div>

                {{-- Planting Date --}}
                <div>
                    <label for="planting_date"
                           class="mb-2 block text-sm font-semibold text-gray-700">
                        Planting Date
                    </label>

                    <input type="date" id="planting_date"
                           name="planting_date"
                           value="{{ old('planting_date', $crop->planting_date?->format('Y-m-d')) }}"
                           class="w-full rounded-lg border border-gray-300 px-4 py-3 focus:border-green-600 focus:outline-none focus:ring-2 focus:ring-green-100">
                </div>

                {{-- Expected Harvest Date --}}
                <div>
                    <label for="expected_harvest_date"
                           class="mb-2 block text-sm font-semibold text-gray-700">
                        Expected Harvest Date
                    </label>

                    <input type="date" id="expected_harvest_date"
                           name="expected_harvest_date"
                           value="{{ old('expected_harvest_date', $crop->expected_harvest_date?->format('Y-m-d')) }}"
                           class="w-full rounded-lg border border-gray-300 px-4 py-3 focus:border-green-600 focus:outline-none focus:ring-2 focus:ring-green-100">
                </div>

                {{-- Status --}}
                <div>
                    <label for="status"
                           class="mb-2 block text-sm font-semibold text-gray-700">
                        Crop Status <span class="text-red-500">*</span>
                    </label>

                    <select id="status" name="status" required
                            class="w-full rounded-lg border border-gray-300 px-4 py-3 focus:border-green-600 focus:outline-none focus:ring-2 focus:ring-green-100">
                        @foreach ([
                            'planned' => 'Planned',
                            'planted' => 'Planted',
                            'growing' => 'Growing',
                            'harvested' => 'Harvested',
                        ] as $value => $label)
                            <option value="{{ $value }}"
                                @selected(old('status', $crop->status) === $value)>
                                {{ $label }}
                            </option>
                        @endforeach
                    </select>
                </div>

                {{-- Notes --}}
                <div>
                    <label for="notes"
                           class="mb-2 block text-sm font-semibold text-gray-700">
                        Notes
                    </label>

                    <textarea id="notes" name="notes" rows="4"
                              placeholder="Add crop details, fertilizer notes, or observations..."
                              class="w-full rounded-lg border border-gray-300 px-4 py-3 focus:border-green-600 focus:outline-none focus:ring-2 focus:ring-green-100">{{ old('notes', $crop->notes) }}</textarea>
                </div>

                {{-- Buttons --}}
                <div class="flex flex-wrap gap-3 border-t border-gray-100 pt-5">
                    <button type="submit"
                            class="rounded-lg bg-green-700 px-6 py-3 font-semibold text-white transition hover:bg-green-800">
                        Update Crop
                    </button>

                    <a href="{{ route('crops.index') }}"
                       class="rounded-lg border border-gray-300 px-6 py-3 font-semibold text-gray-700 transition hover:bg-gray-50">
                        Cancel
                    </a>
                </div>

            </form>
        </div>

        <p class="mt-5 text-center text-sm text-gray-500">
            Smart Farmer Assistant System
        </p>

    </div>

</body>
</html>
