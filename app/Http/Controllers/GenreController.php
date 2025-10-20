<?php

namespace App\Http\Controllers;

use App\Models\Genre;
use Illuminate\Http\Request;

class GenreController extends Controller
{
    // index() & store() punyamu tetap

    // GET /api/genres/{id}
    public function show($id)
    {
        $genre = Genre::find($id);
        if (!$genre) {
            return response()->json([
                'status'  => false,
                'message' => 'Genre tidak ditemukan',
            ], 404);
        }

        return response()->json([
            'status' => true,
            'data'   => $genre,
        ], 200);
    }

    // PUT/PATCH /api/genres/{id}
    public function update(Request $request, $id)
    {
        $genre = Genre::find($id);
        if (!$genre) {
            return response()->json([
                'status'  => false,
                'message' => 'Genre tidak ditemukan',
            ], 404);
        }

        $validated = $request->validate([
            'name' => 'required|string|max:100|unique:genres,name,' . $genre->id,
        ]);

        $genre->update($validated);

        return response()->json([
            'status'  => true,
            'message' => 'Genre berhasil diperbarui',
            'data'    => $genre,
        ], 200);
    }

    // DELETE /api/genres/{id}
    public function destroy($id)
    {
        $genre = Genre::find($id);
        if (!$genre) {
            return response()->json([
                'status'  => false,
                'message' => 'Genre tidak ditemukan',
            ], 404);
        }

        $genre->delete();

        return response()->json([
            'status'  => true,
            'message' => 'Genre berhasil dihapus',
        ], 200);
    }
}
