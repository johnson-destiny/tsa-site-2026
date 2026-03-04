<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Resources;

class ResourceController extends Controller
{
    public function index(Request $request)
    {
        $query = $request->input('query');

        $resources = Resources::search($query)->simplePaginate(9);

        return view('resources.index', compact('resources', 'query'));
    }

    public function suggest() {
        return view('resources.suggest');
    }
}
