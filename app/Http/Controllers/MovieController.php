<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;

class MovieController extends Controller
{
    public function test($id)
    {
        return 'Hello' . $id;
    }

    public function show()
    {
        $movies = DB::select('SELECT * FROM movies ');

        return view('movie', ['movies' => $movies]);
    }
    public function edit($id)
    {
        $movie = DB::select('SELECT * FROM movies WHERE id =?', [$id]);

        return view('editmovie', ['movie' => $movie[0]]);
    }
    public function update(Request $request, $id)
    {
        $res = DB::update('UPDATE movies SET title=? WHERE id=?', [$request->title, $id]);
        if ($res) {
            return 'worked';
        }
    }

    public function store(Request $request)
    {

        return  $request->product;
    }
}
