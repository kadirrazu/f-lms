<?php

namespace App\Http\Controllers;

use App\Models\Book;
use Illuminate\Http\Request;

class FrontendController extends Controller
{
    public function index()
    {
        $models = Book::with(['authors', 'publisher', 'categories'])->orderBy('title_bn', 'asc')->get();

        return view('frontend.index',[
            'models' => $models
        ]);
    }
}
