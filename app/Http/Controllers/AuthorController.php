<?php

namespace App\Http\Controllers;

use App\Models\Author;
use Illuminate\Http\Request;

class AuthorController extends Controller
{
    public function index()
    {
        $authors = Author::withCount('books')->orderBy('id')->get();
        return response()->json(['data' => $authors]);
    }

    public function show(Author $author)
    {
        $author->load('books');
        return response()->json(['data' => $author]);
    }

    public function store(Request $request)
    {
        $validated = $request->validate([
            'name'       => 'required|string|max:255',
            'country'    => 'nullable|string|max:100',
            'birth_year' => 'nullable|integer',
        ]);

        $author = Author::create($validated);
        return response()->json(['data' => $author], 201);
    }

    // PUT /api/authors/{author}
    public function update(Request $request, Author $author)
    {
        $validated = $request->validate([
            'name'       => 'sometimes|required|string|max:255',
            'country'    => 'nullable|string|max:100',
            'birth_year' => 'nullable|integer',
        ]);

        $author->update($validated);
        return response()->json(['data' => $author]);
    }

    // DELETE /api/authors/{author}
    public function destroy(Author $author)
    {
        $author->delete();
        return response()->json(null, 204);
    }
}
