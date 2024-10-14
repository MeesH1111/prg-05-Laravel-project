<?php

namespace App\Http\Controllers;

use App\Http\Requests\ProfileUpdateRequest;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Redirect;
use Illuminate\View\View;

class ContactController extends Controller
{
    public function index(string $id=''){
        $company = 'Hogeschool Rotterdam';
        $id = $id;
        $message = 'Je contact gegevens';
        return view('contact', [
        'id' => $id,
        'message' => $message
    ], compact('company', 'id','message'));
    }
}

