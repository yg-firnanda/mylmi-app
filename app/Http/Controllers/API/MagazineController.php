<?php

namespace App\Http\Controllers\API;

use App\Models\Magazine;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class MagazineController extends Controller
{
    public function index()
    {
        $magazines = Magazine::all();
        return response()->json($magazines);
    }

    public function show()
    {
        //
    }
}
