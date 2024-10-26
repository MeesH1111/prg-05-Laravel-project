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
}

