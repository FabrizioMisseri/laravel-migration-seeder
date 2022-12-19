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
        $currDay = Carbon::today();
        $nextDay = Carbon::today()->addDay(1);
        $trains = Train::where('orario_partenza', '>=', $currDay)->where('orario_partenza', '<=', $nextDay)->get();
        return view('home', compact('trains'));
    }

    public function today()
    {
        $today = Carbon::today();
        dd($today);
        return view('home');
    }
}
