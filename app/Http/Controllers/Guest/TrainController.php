<?php

namespace App\Http\Controllers\Guest;
use App\Http\Controllers\Controller;
use App\Models\Train;
use Illuminate\Http\Request;


class TrainController extends Controller
{
    //mostro la lista dei treni
    public function index() {
			$trains = Train::all();
			return view('home', compact('trains'));
    }
}
