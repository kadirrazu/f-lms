<?php

namespace App\Http\Controllers;

use App\Models\Read;
use Illuminate\Http\Request;

class ReadController extends Controller
{
     
    public function index()
    {
        
        $models = Read::orderBy('id', 'desc')->paginate(15);

        return view('admin.reading-list.index', [
            'page_title' => "All Readings",
            'page_subtitle' => "List of All Read Books",
            'models' => $models
        ]);

    }

    public function create(Request $request)
    {
        
        $bookId = $request->get('book_id');
        
        return view('admin.reading-list.add', [
            'page_title' => "Reading List",
            'page_subtitle' => "Add Book in Reading List",
            'book_id' => $bookId
        ]);
    }

    public function store()
    {

        $attributes = request()->validate([
            'book_id' => 'required|numeric',
            'start_date' => 'nullable|date',
            'end_date' => 'nullable|date',
            'reader_recommended' => 'nullable|numeric',
            'comments' => 'nullable',
            'user_id' => 'required|numeric',
        ]);

        Read::create( $attributes );

        return redirect('/admin/reading-list')->withSuccess('A Book was added in the Reading List.');
    }

    public function show($id)
    {
        $model = Read::find($id);

        return view('admin.reading-list.show', [
            'page_title' => 'Reading List Details',
            'page_subtitle' => 'Reading List Details for ',
            'model' => $model
        ]);

    }

    public function edit($id)
    {
        $model = Read::findOrFail($id);

        return view('admin.reading-list.edit', [
            'page_title' => 'Edit Reading List Item',
            'page_subtitle' => 'Edit Reading List item entry for ',
            'model' => $model
        ]);
    }

    public function update($id)
    {

        $read = Read::findOrFail($id);

        $attributes = request()->validate([
            'book_id' => 'required|numeric',
            'start_date' => 'nullable|date',
            'end_date' => 'nullable|date',
            'reader_recommended' => 'nullable|numeric',
            'comments' => 'nullable',
            'user_id' => 'required|numeric',
        ]);

        $read->update( $attributes );

        return redirect('/admin/reading-list')->withSuccess('Reading List was updated successfully.');
        
    }

    public function destroy($id)
    {
        $read = Read::findOrFail($id);

        $read->delete();

        return redirect('/admin/reading-list')->with('info', 'Reading List was deleted!'); 
    }

}
