<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Resources;

class ResourceController extends Controller
{
    public function index(Request $request)
    {
        $query = $request->input('query');

        // TODO: Functionality behind searching the directory
        // For the functionality, we'll just manually create records for a resource in the database
        $resources = Resources::search($query)->simplePaginate(10);

        return view('resources.index', compact('resources', 'query'));
    }

    public function suggest() {
        return view('resources.suggest');
    }
}
