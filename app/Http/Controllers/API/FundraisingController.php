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

    public function show(Fundraising $fundraising)
    {
        $result = Fundraising::where('slug', $fundraising->slug)->first();
        return response()->json($result);
    }
}
