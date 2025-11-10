<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UploadController extends Controller
{
    public function store(Request $request)
    {
        if ($request->hasFile('file')) {
            $path = $request->file('file')->store('uploads', 'public');
            return response()->json(['path' => '/storage/' . $path]);
        }

        return response()->json(['error' => 'No se subió ningún archivo.'], 400);
    }
}
