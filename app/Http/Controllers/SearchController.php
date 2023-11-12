<?php

// app/Http/Controllers/SearchController.php

namespace App\Http\Controllers;

use App\Models\Vegetable;
use Illuminate\Http\Request;

class SearchController extends Controller
{
    public function index(Request $request)
    {
        // $vegetables = Vegetable::latest()->paginate(10);

        // return view('vegetables.index', compact('vegetables'));
        $name = $request->get('name');
        $condition = $request->get('condition');
        if (is_null($request['parameters'])) {
            $vegetables = Vegetable::latest()->paginate(10);
        } else {
            $vegetables = Vegetable::latest()->where('name', '=', $name)->where('condition', '=', $condition)->paginate(10);
        }

        return view('vegetables.index', compact('vegetables', 'name', 'condition'));
    }

    // 検索機能
    public function search(Request $request)
    {
        $name = $request->get('name');
        $condition = $request->get('condition');
        
        $vegetables = Vegetable::latest()->where('name', '=', $name)->where('condition', '=', $condition)->paginate(10);
        // dd($vegetables);

        return view('vegetables.index', compact('vegetables'));
    }

}

