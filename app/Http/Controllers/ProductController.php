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
        $user = auth()->user();
        $categories = Category::all();

        if(isset(request()->search) && (request()->search != null)){
            $query->where('name', request()->search);
            $query->orWhere('description', request()->search);
        }

        if(isset(request()->category) && (request()->category != null)){
            $query->where('category_id', request()->category);
        }

        $items = $query->get();

        return view('product.index', compact( 'items', 'user', 'categories'));
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

    public function destroy($id) {
        $item = Item::where('id', $id )->firstOrFail();

        $item->delete();

        return redirect()->route('products.index');
    }

    public function store(Request $request) {

        $product = new Item;
        $user_id = request()->user()->id;

        $request->validate([
            'name' => 'required|string|max:50',
            'description' => 'required|string|max:255',
            'category' => 'required|exists:categories,id',
        ],
        [
            'name.required' => 'Je item moet een naam hebben!',
            'description.required' => 'Je item moet een description hebben!',
            'category.required' => 'Je item moet een category hebben!',
        ]);

        $product->name = $request->name;
        $product->description = $request->description;
        $product->user_id = $user_id;
        $product->category_id = $request->category;

        $product->save();

        return redirect()->route('products.index', $user_id);
    }

    public function edit(Item $item, $id) {
        $categories = Category::all();
        $item = Item::find($id);
        $user = auth()->user();

        if(auth()->user()->id === $item->user_id && $user->items()->where('user_id', $user->id)->count() >= 5) {
            return view('product.edit', compact('item', 'categories'));
        } elseif (\Auth::user()->is_admin) {
            return view('product.edit', compact('item', 'categories'));
        }

        return redirect()->route('products.index');
    }

    public function update(Request $request, item $item, $id) {

        $item = Item::find($id);

        $request->validate([
            'name' => 'required|string|max:50',
            'description' => 'required|string|max:255',
            'category' => 'required|exists:categories,id',
        ],
        [
            'name.required' => 'Je item moet een naam hebben!',
            'description.required' => 'Je item moet een description hebben!',
            'category.required' => 'Je item moet een category hebben!',
        ]);

        $item->name = $request->input('name');
        $item->description = $request->input('description');
        $item->category_id = $request->input('category');
        $item->save();

        return redirect()->route('products.index');
    }

    public  function search(Request $request) {

    }

}
