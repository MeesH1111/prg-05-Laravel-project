<?php

namespace App\Http\Controllers;

use App\Models\Category;
use Illuminate\Http\Request;


class CategoryController extends Controller
{
    public function index(){

    }

    public function create(){
        if(\Auth::user()->is_admin){
            return view('category.create');
        }
        else{
            return redirect('/products');
        }

    }

    public function store(Request $request){

        $validated = $request->validate([
            'name' => 'required|unique:categories',
        ],
        [
            'name.required' => "Je moet een naam geven!",
            'name.unique' => "Deze naam bestaat al!",
        ]);

        $category = new Category();
        $category->name = $request->input('name');
        $category->save();

        return redirect()->route('products.index');
    }
}
