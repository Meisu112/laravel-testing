<?php

namespace App\Http\Controllers;

use App\Models\Crop;
use App\Models\Farm;
use Illuminate\Http\Request;

class CropController extends Controller
{
    public function index()
    {
        $crops = Crop::whereHas('farm', function ($query) {
            $query->where('user_id', auth()->id());
        })->with('farm')->latest()->get();

        return view('crops.index', compact('crops'));
    }

    public function create()
    {
        $farms = Farm::where('user_id', auth()->id())
            ->orderBy('farm_name')
            ->get();

        return view('crops.create', compact('farms'));
    }

    public function store(Request $request)
    {
        $validated = $request->validate([
            'farm_id' => ['required', 'integer', 'exists:farms,id'],
            'crop_name' => ['required', 'string', 'max:255'],
            'planting_method' => ['nullable', 'string', 'max:255'],
            'planting_date' => ['nullable', 'date'],
            'expected_harvest_date' => [
                'nullable',
                'date',
                'after_or_equal:planting_date',
            ],
            'status' => ['required', 'in:planned,planted,growing,harvested'],
            'notes' => ['nullable', 'string'],
        ]);

        $farm = Farm::where('user_id', auth()->id())
            ->findOrFail($validated['farm_id']);

        $farm->crops()->create(
            collect($validated)->except('farm_id')->all()
        );

        return redirect()
            ->route('crops.index')
            ->with('success', 'Crop added successfully!');
    }
    public function edit(\App\Models\Crop $crop)
{
    abort_unless(
        $crop->farm()->where('user_id', auth()->id())->exists(),
        404
    );

    $farms = auth()->user()->farms()->latest()->get();

    return view('crops.edit', compact('crop', 'farms'));
}

public function update(\Illuminate\Http\Request $request, \App\Models\Crop $crop)
{
    abort_unless(
        $crop->farm()->where('user_id', auth()->id())->exists(),
        404
    );

    $validated = $request->validate([
        'farm_id' => 'required|exists:farms,id',
        'crop_name' => 'required|string|max:255',
        'planting_method' => 'nullable|string|max:255',
        'planting_date' => 'nullable|date',
        'expected_harvest_date' => 'nullable|date|after_or_equal:planting_date',
        'status' => 'required|in:planned,planted,growing,harvested',
        'notes' => 'nullable|string',
    ]);

    $farm = auth()->user()->farms()
        ->where('id', $validated['farm_id'])
        ->firstOrFail();

    $farm->crops()->save(
        tap($crop, function ($item) use ($validated) {
            $item->fill(collect($validated)->except('farm_id')->all());
        })
    );

    return redirect()
        ->route('crops.index')
        ->with('success', 'Crop updated successfully.');
}
public function destroy(\App\Models\Crop $crop)
{
    // Login ဝင်ထားတဲ့ user ပိုင် Crop ဟုတ်မဟုတ် စစ်ပါ
    abort_unless(
        $crop->farm()->where('user_id', auth()->id())->exists(),
        404
    );

    // Crop ကို ဖျက်ပါ
    $crop->delete();

    return redirect()
        ->route('crops.index')
        ->with('success', 'Crop deleted successfully.');
}
}

