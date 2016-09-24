<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;

class PagesController extends Controller
{

    public function home()
    {

        $people = ['Taylor', 'Matt', 'Jeff'];

        return view('welcome', compact('people'));
    }

    public function about()
    {
        return view('pages/about');
    }
}
