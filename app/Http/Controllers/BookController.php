<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;

class BookController extends Controller
{
    //
    public function show()
    {

        $books = DB::select('SELECT * FROM books');

        return view('Book', ['books' => $books]);
    }
    public function show2()
    {

        $books = DB::select('SELECT * FROM books');

        return view('includes.book-list', ['books' => $books]);
    }

    public function edit()
    {
        return view('Book-Insert');
    }

    public function add(Request $request)
    {
        $res = DB::insert('INSERT INTO books (title,price) VALUES (?,?)', [$request->title, $request->price]);

        if ($res) {
            return  redirect('/books');
        } else {
            return 'error';
        }
    }

    public function update($id)
    {
        $book = DB::select('SELECT * FROM books WHERE id =?', [$id]);

        return view('Book-update', ['book' => $book[0]]);
    }

    public function update2(Request $request, $id)
    {
        $res = DB::update('UPDATE books SET title=? ,price=? WHERE id=?', [$request->title, $request->price, $id]);

        if ($res) {
            return  redirect('/books');
        } else {
            return 'error';
        }
    }
    /*
    public function delete($id)
    {
        $res = DB::delete('DELETE FROM books WHERE id=?', [$id]);

        if ($res) {
            return 'worked';
        }
    }
    */

    public function delete($id)
    {

        $res = DB::delete('DELETE FROM books WHERE id=?', [$id]);



        return response()->json([
            'success' => 'Record has been deleted successfully!',
        ]);
    }
}
