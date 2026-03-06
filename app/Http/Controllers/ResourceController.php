<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Resources;

class ResourceController extends Controller
{
    public function index(Request $request)
    {
        $query = $request->input('query');

        $validated=$request->validate([
            'query'=>'nullable|min:3|string|max:100',
        ]);

        $resources = Resources::search($query)->simplePaginate(9);

        return view('resources.index', compact('resources', 'query'));
    }

    public function show($id) {
        $resource = Resources::find($id);
        return view('resources.show', compact('resource'));
    }

    public function suggest() {
        return view('resources.suggest');
    }
}
