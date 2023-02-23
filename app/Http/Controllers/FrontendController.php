<?php

namespace App\Http\Controllers;

use App\Models\Author;
use App\Models\Book;
use App\Models\Category;
use App\Models\Favourite;
use App\Models\Publisher;
use App\Models\User;
use Illuminate\Http\Request;

class FrontendController extends Controller
{
    public function index()
    {
        $books = Book::with(['authors', 'publisher', 'categories'])->orderBy('title_bn', 'asc')->paginate(10);

        return view('frontend.index',[
            'books' => $books
        ]);
    }

    public function viewBookById($id)
    {
        $book = Book::findOrFail($id);

        return view('frontend.view-book',[
            'book' => $book
        ]);
    }

    public function viewAuthorBooksById($id)
    {
        $model = Author::findOrFail($id);

        $books = $model->books()->paginate(10);

        return view('frontend.book-search-result',[
            'type' => 'Author/Writer',
            'title' => $model->title_bn,
            'books' => $books
        ]);
    }

    public function viewPublisherBooksById($id)
    {
        $model = Publisher::findOrFail($id);

        $books = $model->books()->paginate(10);

        return view('frontend.book-search-result',[
            'type' => 'Publisher',
            'title' => $model->title_bn,
            'books' => $books
        ]);
    }

    public function viewCategoryBooksById($id)
    {
        $model = Category::findOrFail($id);

        $books = $model->books()->paginate(10);

        return view('frontend.book-search-result',[
            'type' => 'Category',
            'title' => $model->title_bn,
            'books' => $books
        ]);
    }

    public function favouriteListByUser()
    {
        if( auth()->check() )
        {
            $favourites = Favourite::where('user_id', auth()->user()->id )->get();

            return view('frontend.favourite-books',[
                'favourites' => $favourites
            ]);
        }

        return redirect('/')->with('error', 'Access violation error!');
        
    }

    public function removeFromFavouriteList($id)
    {
        $userId = auth()->user()->id;

        $result = Favourite::where('id', $id)->where('user_id', $userId)->get();

        if( count($result) > 0 )
        {
            
            Favourite::findOrFail($id)->delete();

            return back()->with('info', 'Item was deleted from your Favourite List!'); 
        }

        return back()->with('error', 'Something went wrong in performing operaton.'); 
    }

    public function addIntoFavouriteList($id)
    {
        
        $book = Book::where('id', $id)->get();

        if(count($book) == 1)
        {
            $attributes = [
                'book_id' => $id,
                'user_id' => auth()->user()->id,
            ];
    
            Favourite::create( $attributes );
    
            return back()->withSuccess('A Book was added in the Favourite List.');
        }
        
        return back()->with('error', 'Something went wrong in performing operaton.'); 

    }
}
