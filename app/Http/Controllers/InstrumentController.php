<?php

namespace App\Http\Controllers;

use App\Models\Instrument;
use App\Models\Category;
use Illuminate\Http\Request;

class InstrumentController extends Controller
{
    public function index()
    {
        $instruments = Instrument::with('category')->get();
        $categories = Category::all();
        return view('instruments.index', ['instruments' => $instruments, 'categories' => $categories]);
    }

    public function create()
    {
        $categories = Category::all();
        return view('instruments.create', ['categories' => $categories]);
    }

    public function store(Request $request)
    {
        $validated = $request->validate([
            'name' => 'required|string|max:255',
            'brand' => 'nullable|string|max:255',
            'price' => 'nullable|numeric',
            'weight' => 'nullable|numeric',
            'is_acoustic' => 'nullable|boolean',
            'release_year' => 'nullable|integer',
            'category_id' => 'required|integer|exists:categories,id'
        ]);

        Instrument::create($validated);

        return redirect()->route('instruments')->with('success', 'Instrumento creado exitosamente');
    }

    public function show(Instrument $instrument)
    {
        return response()->json($instrument->load('category'));
    }

    public function edit(Instrument $instrument)
    {
        $categories = Category::all();
        return view('instruments.edit', ['instrument' => $instrument, 'categories' => $categories]);
    }

    public function update(Request $request, Instrument $instrument)
    {
        $validated = $request->validate([
            'name' => 'required|string|max:255',
            'brand' => 'nullable|string|max:255',
            'price' => 'nullable|numeric',
            'weight' => 'nullable|numeric',
            'is_acoustic' => 'nullable|boolean',
            'release_year' => 'nullable|integer',
            'category_id' => 'nullable|integer|exists:categories,id'
        ]);

        $instrument->update($validated);

        return redirect()->route('instruments')->with('success', 'Instrumento actualizado exitosamente');
    }

    public function destroy(Instrument $instrument)
    {
        $instrument->delete();

        if (request()->wantsJson()) {
            return response()->json(['message' => 'Instrumento borrado'], 200);
        }

        return redirect()->route('instruments')->with('success', 'Instrumento borrado');
    }
}
