<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Traits\InferenceEngine;

class quoteController extends Controller
{
    use InferenceEngine;

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
        $plan = $this->inferenceEngine($request);
        return view('result', compact('plan', 'request'));
    }
}
