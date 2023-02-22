<?php

namespace App\Http\Controllers;

use App\Models\Favourite;
use Illuminate\Http\Request;

class FavouriteController extends Controller
{
     
    public function index()
    {
        
        $models = Favourite::orderBy('id', 'desc')->get();

        return view('admin.favourite.index', [
            'page_title' => "Favourite Books",
            'page_subtitle' => "List of All Favourite/Loved Books",
            'models' => $models
        ]);

    }

    public function create(Request $request)
    {
        
        $bookId = $request->get('book_id');
        
        return view('admin.favourite.add', [
            'page_title' => "Favourite Books",
            'page_subtitle' => "Add Book in Favourite/Loved List",
            'book_id' => $bookId
        ]);
    }

    public function store()
    {

        $attributes = request()->validate([
            'book_id' => 'required|numeric',
            'user_id' => 'required|numeric',
        ]);

        Favourite::create( $attributes );

        return redirect('/admin/favourite')->withSuccess('A Book was added in the Favourite List.');
    }

    public function show($id)
    {
        $model = Favourite::find($id);

        return view('admin.favourite.show', [
            'page_title' => 'Reading List Details',
            'page_subtitle' => 'Reading List Details for ',
            'model' => $model
        ]);

    }

    public function destroy($id)
    {
        $read = Favourite::findOrFail($id);

        $read->delete();

        return redirect('/admin/favourite')->with('info', 'Item was deleted from Favourite List!'); 
    }

}
