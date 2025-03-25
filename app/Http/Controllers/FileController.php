<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class FileController extends Controller
{
    function viewFormUpload()
    {
        return inertia('FileUpload');
    }

    function store(Request $request)
    {
        $request->file('gambar')->store('foods', 'public');
    }
}