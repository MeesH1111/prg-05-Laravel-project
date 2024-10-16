<?php

namespace App\Http\Controllers;

use App\Models\empty;
use App\Models\Item;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $items = Item::all();

        $company = 'Hogeschool Rotterdam';
        return view('product.index', compact('company', 'items'));


    }

    public function show(item $item) {
        return view('product.show', compact('item'));
    }

    public function create()
    {
        return view('product.create');
    }
}
