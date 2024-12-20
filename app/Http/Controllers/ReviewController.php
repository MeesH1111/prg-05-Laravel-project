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
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create($id)
    {

    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request, Item $item)
    {

        $request->validate([
            'name' => 'required|string|max:50',
            'description' => 'required|string|max:255',
        ],
            [
                'name.required' => 'Je review moet een naam hebben!',
                'description.required' => 'Je review moet een description hebben!',
            ]);

        $review = new Review();

        $review->name = $request->get('name');
        $review->description = $request->get('description');
        $review->user_id = auth()->user()->id;
        $review->item_id = $item->id;

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

    }
}
