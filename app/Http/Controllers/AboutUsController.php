<?php

namespace App\Http\Controllers;

use App\Http\Requests\ProfileUpdateRequest;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Redirect;
use Illuminate\View\View;

class AboutUsController extends Controller
{
    public function index(){
        $company = 'Hogeschool Rotterdam';
        return view('about-us' , compact('company'));
    }
}
