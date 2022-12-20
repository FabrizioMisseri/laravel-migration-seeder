<?php

namespace App\Http\Controllers\Guest;

use App\Http\Controllers\Controller;
use App\Models\Train;
use Carbon\Carbon;
use Illuminate\Http\Request;

class PageController extends Controller
{
    public function index()
    {
        $currDay = Carbon::now();
        $trains = Train::where('orario_partenza', '>=', $currDay)->get();
        return view('home', compact('trains'));
    }
}
