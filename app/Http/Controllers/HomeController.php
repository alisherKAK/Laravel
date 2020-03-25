<?php

namespace App\Http\Controllers;

use App\Models\Book;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    function index(Request $request) {
        return 'index';
    }

    function book(Book $book) {
        return $book;
    }
}
