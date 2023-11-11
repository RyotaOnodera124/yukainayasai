<?php

// app/Http/Controllers/SearchController.php

namespace App\Http\Controllers;

use App\Models\Vegetable;
use Illuminate\Http\Request;

class SearchController extends Controller
{
    public function index()
    {
        $vegetables = Vegetable::latest()->paginate(10);

        return view('vegetables.index', compact('vegetables'));
    }

}

