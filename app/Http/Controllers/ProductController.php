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

        foreach (Item::all() as $item) {
            echo $item->id;
            echo $item->name;
            echo $item->description;
            echo $item->tags;
            echo $item->user_id;
        }

        $company = 'Hogeschool Rotterdam';
        return view('product.index', compact('company', 'item'));


    }

//    public function show(item $item) {
//        $item =  Item::find(1);
//    }
}
