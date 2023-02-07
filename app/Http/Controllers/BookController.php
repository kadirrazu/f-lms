<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Validation\Rule;
use App\Models\Book;
use App\Models\Category;
use App\Models\Author;
use App\Models\Publisher;
use App\Models\CollectionMethod;
use App\Models\Storage;
use App\Models\State;

class BookController extends Controller
{
       
    public function index()
    {
        
        $models = Book::orderBy('title_bn', 'asc')->paginate(15);

        return view('admin.book.index', [
            'page_title' => "All Books",
            'page_subtitle' => "List of All Books",
            'models' => $models
        ]);

    }

    public function create()
    {
        return view('admin.book.add', [
            'page_title' => "Add Book",
            'page_subtitle' => "Add a new Book"
        ]);
    }

    public function store(Request $request)
    {
        $attributes = request()->validate([
            'title_bn' => 'required|max:255',
            'title_en' => 'nullable',
            'slug' => ['nullable', Rule::unique('books', 'slug')],
            'publisher_id' => 'required|numeric',
            'printed_price' => 'nullable|numeric',
            'purchase_price' => 'nullable|numeric',
            'pages' => 'nullable|numeric',
            'image' => 'nullable',
            'collection_method_id' => 'required|numeric',
            'entry_no' => ['nullable', Rule::unique('books', 'entry_no')],
            'entry_date' => 'nullable|date',
            'storage_id' => 'nullable|numeric',
            'state_id' => 'required|numeric',
            'recommended' => 'required|numeric',
            'notes' => 'nullable',
        ]);

        $attributes['created_by'] = auth()->user()->id;

        $authors = $request->input('author');
        $categories = $request->input('category');     

        $book = Book::create( $attributes );

        $book->authors()->attach($authors);
        $book->categories()->attach($categories);

        return redirect('/admin/book')->withSuccess('Book added successfully.');
    }

    public function show($id)
    {
        $model = Book::find($id);

        return view('admin.book.show', [
            'page_title' => 'Book Details',
            'page_subtitle' => 'Details of ',
            'model' => $model
        ]);

    }

    public function edit($id)
    {
        $model = Book::findOrFail($id);

        return view('admin.book.edit', [
            'page_title' => 'Edit Book',
            'page_subtitle' => 'Edit Details of',
            'model' => $model
        ]);
    }

    public function update(Book $book)
    {
        $attributes = request()->validate([
            'title_bn' => ['required', Rule::unique('authors', 'title_bn')->ignore($book)],
            'title_en' => ['nullable', Rule::unique('authors', 'title_en')->ignore($book)],
            'slug' => ['nullable', Rule::unique('authors', 'slug')->ignore($book)],
            'status' => 'required|boolean'
        ]);

        $book->update( $attributes );

        return redirect('/admin/book')->withSuccess('Book was updated successfully.');
        
    }

    public function destroy($id)
    {
        $book = Book::findOrFail($id);

        $book->delete();

        return redirect('/admin/book')->with('info', 'Book was deleted!'); 
    }

}
