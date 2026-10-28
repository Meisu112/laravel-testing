<?php

namespace App\Http\Controllers;

use App\Models\Farm;
use Illuminate\Http\Request;

class FarmController extends Controller
{
    public function index()
    {
        $farms = Farm::where('user_id', auth()->id())
            ->latest()
            ->get();

        return view('farms.index', compact('farms'));
    }

    public function create()
    {
        return view('farms.create');
    }

    public function store(Request $request)
    {
        $validated = $request->validate([
            'farm_name' => ['required', 'string', 'max:255'],
            'location' => ['required', 'string', 'max:255'],
            'area_acres' => ['required', 'numeric', 'min:0.01'],
            'description' => ['nullable', 'string'],
        ]);

        auth()->user()->farms()->create($validated);

        return redirect()
            ->route('farms.index')
            ->with('success', 'Farm added successfully!');
    }
}
