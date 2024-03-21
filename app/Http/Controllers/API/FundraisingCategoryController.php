<?php

namespace App\Http\Controllers\API;

use App\Models\Fundraising;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class FundraisingCategoryController extends Controller
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
