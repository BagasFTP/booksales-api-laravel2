<?php

namespace App\Http\Controllers;

use App\Models\Author;
use Illuminate\Http\Request;

class AuthorController extends Controller
{
    // index() & store() punyamu tetap

    // GET /api/authors/{id}
    public function show($id)
    {
        $author = Author::find($id);
        if (!$author) {
            return response()->json([
                'status'  => false,
                'message' => 'Author tidak ditemukan',
            ], 404);
        }

        return response()->json([
            'status' => true,
            'data'   => $author,
        ], 200);
    }

    // PUT/PATCH /api/authors/{id}
    public function update(Request $request, $id)
    {
        $author = Author::find($id);
        if (!$author) {
            return response()->json([
                'status'  => false,
                'message' => 'Author tidak ditemukan',
            ], 404);
        }

        $validated = $request->validate([
            'name' => 'required|string|max:100|unique:authors,name,' . $author->id,

        ]);

        $author->update($validated);

        return response()->json([
            'status'  => true,
            'message' => 'Author berhasil diperbarui',
            'data'    => $author,
        ], 200);
    }

    // DELETE /api/authors/{id}
    public function destroy($id)
    {
        $author = Author::find($id);
        if (!$author) {
            return response()->json([
                'status'  => false,
                'message' => 'Author tidak ditemukan',
            ], 404);
        }

        $author->delete();

        return response()->json([
            'status'  => true,
            'message' => 'Author berhasil dihapus',
        ], 200);
    }
}
