<?php

namespace App\Http\Controllers;

use App\Models\Book;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    function index(Request $request) {
        return view('index', [
            'books' => Book::all()
        ]);
    }

    function details(Book $book) {
        return view('details', [
            'book' => $book
        ]);
    }

    function create() {
        return view('form');
    }

    function createPost(Request $request) {
        $request->validate($this->rules());

        $book = new Book($request->except('_token'));
        $book->save();

        return redirect()->route('book.details', $book);
    }

    function update(Book $book) {
        return view('form', [
            'book' => $book
        ]);
    }

    function updatePut(Request $request, Book $book) {
        $rules = $this->rules();
        $rules['name'] .= ",name,{$book->id}";
        $request->validate($rules);

        $data = $request->except(['_token', '_method']);
        $book->update($data);
        $book->save();

        return redirect()->route('book.details',  $book);
    }

    function delete(Book $book) {
        $book->delete();
        return redirect()->route('index');
    }

    protected function rules() {
        return [
            'name' => 'required|unique:books',
            'year' => 'required|int'
        ];
    }
}
