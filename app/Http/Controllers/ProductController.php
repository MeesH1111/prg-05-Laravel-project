<?php

namespace App\Http\Controllers;

use App\Models\empty;
use App\Models\Item;
use App\Models\Review;
use Illuminate\Http\Request;
use App\Models\User;
use App\Models\Category;

class ProductController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(Request $request)
    {
        $query = Item::query();
        $user = Item::with('user')->get();
        $categories = Category::all();

        if(isset(request()->search) && (request()->search != null)){
            $query->where('name', request()->search);
        }

       if(isset(request()->category) && (request()->category != null)){
           $query->where('category_id',request()->category);

       }

       $items = $query->get();

        $company = 'Hogeschool Rotterdam';
        return view('product.index', compact('company', 'items', 'user', 'categories'));


    }

    public function show(string $id) {

        $reviews = Review::where('item_id', $id)->get();
        $item = Item::find($id);
        $category = Category::all();

        return view('product.show', compact('item', 'reviews', 'category'));
    }

    public function create()
    {
        $categories = Category::all();
        return view('product.create', compact('categories'));
    }

    public function destroy(item $item) {

    }

    public function store(Request $request) {

        $product = new Item;
        $user_id = request()->user()->id;

        $product->name = $request->name;
        $product->description = $request->description;
        $product->tags = json_encode($request->tags);
        $product->user_id = $user_id;
        $product->category_id = $request->category;

        $product->save();

        return redirect()->route('products.index', $user_id);
    }

    public function edit(item $item) {

    }

    public function update(Request $request, item $item) {

    }

    public  function search(Request $request) {

    }

}
