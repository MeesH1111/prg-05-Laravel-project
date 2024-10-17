<?php

namespace App\Http\Controllers;

use App\Models\empty;
use App\Models\Item;
use App\Models\Review;
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

    public function show($id) {

        $review = Review::find($id);
        $reviews = Review::all();
        $item = Item::find($id);
        return view('product.show', compact('item', 'review', 'reviews'));
    }

    public function create()
    {
        return view('product.create');
    }

    public function destroy(item $item) {

    }

    public function store(Request $request) {

    }
}
