<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Traits\InferenceEngine;

class resultController extends Controller
{
    use InferenceEngine;

    public function index()
    {
        return view('result');
    }
    public function ruleBased(Request $request)
    {
        return $this->inferenceEngin($request);
    }
}
