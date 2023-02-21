<?php

namespace App\Http\Controllers;

use App\Models\Book;
use Illuminate\Http\Request;

class FrontendController extends Controller
{
    public function index()
    {
        $models = Book::with(['authors', 'publisher', 'categories'])->orderBy('title_bn', 'asc')->paginate(10);

        return view('frontend.index',[
            'models' => $models
        ]);
    }

    public function viewBookById($id)
    {
        $book = Book::findOrFail($id);

        return view('frontend.view-book',[
            'book' => $book
        ]);
    }
}
