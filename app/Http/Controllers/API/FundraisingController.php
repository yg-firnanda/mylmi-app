<?php

namespace App\Http\Controllers\API;

use App\Models\Fundraising;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class FundraisingController extends Controller
{
    public function index()
    {
        $fundraisings = Fundraising::all();
        return response()->json($fundraisings);
    }

    public function show()
    {
        //
    }
}
