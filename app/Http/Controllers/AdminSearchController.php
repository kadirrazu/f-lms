<?php

namespace App\Http\Controllers;

use App\Models\Author;
use App\Models\Publisher;
use App\Models\Book;
use App\Models\Category;
use App\Models\CollectionMethod;
use Illuminate\Http\Request;

class AdminSearchController extends Controller
{

    public function searchAuthorById($id)
    {
        $author = Author::findOrFail($id);

        $books = $author->books;

        return view('admin.search-result.index',[
            'key' => $author,
            'key_type' => 'Author/Writer',
            'models' => $books
        ]);
    }
    
    public function searchPublisherById($id)
    {
        $publisher = Publisher::findOrFail($id);

        $books = $publisher->books;

        return view('admin.search-result.index',[
            'key' => $publisher,
            'key_type' => 'Publisher',
            'models' => $books
        ]);
    }

    public function searchCategoryById($id)
    {
        $category = Category::findOrFail($id);

        $books = $category->books;

        return view('admin.search-result.index',[
            'key' => $category,
            'key_type' => 'Category',
            'models' => $books
        ]);
    }

    public function searchCollectionMethodById($id)
    {
        $method = CollectionMethod::findOrFail($id);

        $books = $method->books;

        return view('admin.search-result.index',[
            'key' => $method,
            'key_type' => 'Collection Method',
            'models' => $books
        ]);
    }

    /*Ajax Request using Alpine to Search for Books*/
    public function ajaxAnythingSearch(Request $request)
    {
        $book = '{}';

        if( $request->post('query') != '' )
        {
            /*$book = Book::where('title_bn', 'like', '%' . $request->post('query') . '%')
                ->orWhere('title_en', 'like', '%' . $request->post('query') . '%')
                ->with('authors')
                ->get();*/
                
            $book = Book::where('title_bn', 'like', '%' . $request->post('query') . '%')
                ->orWhere('title_en', 'like', '%' . $request->post('query') . '%')
                ->with('authors', 'publisher')
                ->orWhereHas('authors', function($q) use ($request)
                {
                    $q->where('title_bn', 'like', '%' . $request->post('query') . '%')
                    ->orWhere('title_en', 'like', '%' . $request->post('query') . '%');
                
                })
                ->orWhereHas('publisher', function($q) use ($request)
                {
                    $q->where('title_bn', 'like', '%' . $request->post('query') . '%')
                    ->orWhere('title_en', 'like', '%' . $request->post('query') . '%');
                
                })
                ->take(10)
                ->get();
        }

        return $book;
    }

}
