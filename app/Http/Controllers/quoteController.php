<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class quoteController extends Controller
{
    public function index()
    {
        return view('quote');
    }
    public function create()
    {
        return view('quote');
    }
    public function show(Request $request)
    {
        return view('result',compact('request'));
    }
}
