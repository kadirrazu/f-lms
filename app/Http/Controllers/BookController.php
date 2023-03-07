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
use Illuminate\Support\Facades\Cache;

class BookController extends Controller
{
       
    public function index()
    {
        
        $models = Book::with(['authors', 'categories'])->orderBy('id', 'desc')->paginate(10);

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
            'image' => 'nullable|image|max:1536',
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

        $imagePath = null;

        if( $request->hasFile('image') )
        {
            $imagePath = $request->file('image')->store('thumbnails');
        }

        $attributes['image'] = $imagePath;

        $book = Book::create( $attributes );

        $book->authors()->attach($authors);
        $book->categories()->attach($categories);

        
        if(Cache::has('books.all')) 
        {
            Cache::forget('books.all');
        }


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
            'title_bn' => 'required|max:255',
            'title_en' => 'nullable',
            'slug' => ['nullable', Rule::unique('books', 'slug')->ignore($book)],
            'publisher_id' => 'required|numeric',
            'printed_price' => 'nullable|numeric',
            'purchase_price' => 'nullable|numeric',
            'pages' => 'nullable|numeric',
            'image' => 'nullable',
            'image_updated' => 'nullable|image|max:1536',
            'collection_method_id' => 'required|numeric',
            'entry_no' => ['nullable', Rule::unique('books', 'entry_no')->ignore($book)],
            'entry_date' => 'nullable|date',
            'storage_id' => 'nullable|numeric',
            'state_id' => 'required|numeric',
            'recommended' => 'required|numeric',
            'notes' => 'nullable',
        ]);

        $attributes['updated_by'] = auth()->user()->id;

        if ($attributes['image'] ?? false) {
            $attributes['image'] = request()->file('image')->store('thumbnails');
        }

        $authors = request()->input('author');
        $categories = request()->input('category');

        $book->update( $attributes );

        $book->authors()->sync($authors);
        $book->categories()->sync($categories);

        
        if(Cache::has('books.all')) 
        {
            Cache::forget('books.all');
        }

        return redirect('/admin/book')->withSuccess('Book was updated successfully.');
        
    }

    public function destroy($id)
    {
        $book = Book::findOrFail($id);

        $book->authors()->detach();
        $book->categories()->detach();

        $book->delete();

        return redirect('/admin/book')->with('info', 'Book was deleted!'); 
    }

    /*Ajax Request using Alpine to Search for Books*/
    public function ajaxBookSearch(Request $request)
    {
        $book = '{}';

        if( $request->post('query') != '' )
        {
            $book = Book::where('title_bn', 'like', '%' . $request->post('query') . '%')
                ->orWhere('title_en', 'like', '%' . $request->post('query') . '%')
                ->with('authors')
                ->get();
        }

        return $book;
    }

}
