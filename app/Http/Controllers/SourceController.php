<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SourceController extends Controller
{
    public function index(Request $request)
    {
        return view('sources.index');
    }
}
