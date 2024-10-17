<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\Item;
use App\Models\Review;
use App\Models\User;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;

class ReviewController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('review.index');
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create($id)
    {
        $Review = Review::find($id);
        $item = Item::find($id);
        return view('review.create', compact('Review', 'item'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request): RedirectResponse
    {

        $item = Item::find($request->id);

        $user_id = auth()->id();
        $item_id = $item->id;

        $review = new Review;

        $review->name = $request->name;
        $review->description = $request->description;
        $review->user_id = $user_id;
        $review->item_id = $item_id;

        $review->save();

        return redirect()->route('products.show', $item->id);

    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $Review = Review::find($id);
        $item = Item::find($id);

        return view('review.show', compact('Review' , 'item'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        return view('review.index');
    }
}
