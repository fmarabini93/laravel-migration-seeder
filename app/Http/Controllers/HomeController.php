<?php

namespace App\Http\Controllers;

use App\Travel;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index() {
        $travels = Travel::all();
        return view('home', [
            'title' => 'Laravel Travels',
            'travels' => $travels
        ]);
    }
}