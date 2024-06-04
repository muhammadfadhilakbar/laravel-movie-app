<?php

namespace App\Http\Controllers;

use App\Models\Review;
use App\Http\Controllers;
use Illuminate\Http\Request;

class ReviewController extends Controller
{
    public function index()
    {
        $reviews = review::all();

        return view('reviews.index', compact('reviews'));
    }

    public function create()
    {
    $genres = Genre::all();
    return view('movies.create', compact('genres'));
    }

    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'title' => 'required',
            'genre_id' => 'required',
            'poster' => 'required',
            'synopsis' => 'required',
        ]);

        Movie::create($validatedData);

        return redirect('/movies')->with('success', 'Movie added successfully!');
    }

    public function destroy(Movie $movie)
    {
        $movie->delete();
        return redirect('/movies')->with('success', 'Movie deleted successfully!');
    }
}
