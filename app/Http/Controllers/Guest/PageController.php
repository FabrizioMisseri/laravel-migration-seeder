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
        // $currDate = Carbon::now()->format('Y-m-d');
        // $trains = Train::all()->where('orario_partenza', '=', $currDate);
        $trains = Train::all();
        return view('home', compact('trains'));
    }
}
