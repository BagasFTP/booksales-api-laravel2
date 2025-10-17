<?php

namespace App\Http\Controllers;

use App\Models\Genre;
use Illuminate\Http\Request;
use Illuminate\Support\Str;

class GenreController extends Controller
{
    // READ ALL (GET /api/genres)
    public function index()
    {
        $genres = Genre::orderBy('id')->get();
        return response()->json(['data' => $genres], 200);
    }

    // CREATE (POST /api/genres)
    public function store(Request $request)
    {
        $validated = $request->validate([
            'name' => 'required|string|max:100',
            'slug' => 'nullable|string|max:120'
        ]);

        // auto-generate slug jika tidak diisi
        if (empty($validated['slug'])) {
            $validated['slug'] = Str::slug($validated['name']);
        }

        $genre = Genre::create($validated);

        return response()->json(['data' => $genre], 201);
    }
}
