<?php

namespace App\Http\Controllers;

use App\Http\Requests\ProfileUpdateRequest;
use App\Models\Category;
use App\Models\Item;
use App\Models\User;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Redirect;
use Illuminate\View\View;

class AdminController extends Controller
{
    public function index() {
        $items = Item::all();
        $users = User::all();
        $categories = Category::all();


        if (\Auth::user()->is_admin) {
            return view('admin.index', compact('items', 'users', 'categories'));
        } else {
            return redirect('/products');
        }
    }

    public function toggleVisibility(Item $item) {

        $item->is_visible = !$item->is_visible;
        $item->save();

        return redirect()->back();

    }

    public function editItems(Item $item, Request $request, $id) {
        $categories = Category::all();
        $item = Item::find($id);

        return view('admin.items.edit', compact('item', 'categories'));
    }

    public function updateItems(Item $item, Request $request, $id) {

        $item = Item::find($id);

        $request->validate([
            'name' => 'required',
            'description' => 'required',
            'category' => 'required',
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

        return redirect()->route('admin.index');
    }

    public function deleteItems(Item $item, $id) {
        $item = Item::where('id', $id )->firstOrFail();

        $item->delete();

        return redirect()->route('admin.index');
    }

    public function editCategory(Category $category, Request $request){



        return view('admin.category.edit', compact('category'));


    }

    public function updateCategory(Category $category, Request $request) {

       $request->validate([
           'name' => 'required',
       ],
       [
           'name.required' => 'De category moet een naam hebben!',
           'name.unique' => 'De category bestaat al!',
       ]);

        $category->name = $request->input('name');
        $category->save();


        return redirect()->route('admin.index');
    }

    public function deleteCategory($id)
    {
        $category = Category::where('id', $id )->firstOrFail();

        $category->delete();

        return redirect()->route('admin.index');
    }
}

