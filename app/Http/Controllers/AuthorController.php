<?php

namespace App\Http\Controllers;

use App\Models\Author;
use Illuminate\Http\Request;

class AuthorController extends Controller
{
    // READ ALL (GET /api/authors)
    public function index()
    {
        $authors = Author::orderBy('id')->get();
        return response()->json(['data' => $authors], 200);
    }

    // CREATE (POST /api/authors)
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
}
