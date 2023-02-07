<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Validation\Rule;
use App\Models\Author;

class AuthorController extends Controller
{
       
    public function index()
    {
        
        $models = Author::orderBy('title_bn', 'asc')->paginate(15);

        return view('admin.author.index', [
            'page_title' => "All Authors",
            'page_subtitle' => "List of All Authors",
            'models' => $models
        ]);

    }

    public function create()
    {
        return view('admin.author.add', [
            'page_title' => "Add Author",
            'page_subtitle' => "Add a new Author"
        ]);
    }

    public function store()
    {
        $attributes = request()->validate([
            'title_bn' => ['required', Rule::unique('authors', 'title_bn')],
            'title_en' => ['nullable', Rule::unique('authors', 'title_en')],
            'slug' => ['nullable', Rule::unique('authors', 'slug')],
            'status' => 'required|boolean'
        ]);

        Author::create( $attributes );

        return redirect('/admin/author')->withSuccess('Author added successfully.');
    }

    public function show($id)
    {
        $model = Author::find($id);

        return view('admin.author.show', [
            'page_title' => 'Author Details',
            'page_subtitle' => 'Details of ',
            'model' => $model
        ]);

    }

    public function edit($id)
    {
        $model = Author::findOrFail($id);

        return view('admin.author.edit', [
            'page_title' => 'Edit Author',
            'page_subtitle' => 'Edit Details of',
            'model' => $model
        ]);
    }

    public function update(Author $author)
    {
        $attributes = request()->validate([
            'title_bn' => ['required', Rule::unique('authors', 'title_bn')->ignore($author)],
            'title_en' => ['nullable', Rule::unique('authors', 'title_en')->ignore($author)],
            'slug' => ['nullable', Rule::unique('authors', 'slug')->ignore($author)],
            'status' => 'required|boolean'
        ]);

        $author->update( $attributes );

        return redirect('/admin/author')->withSuccess('Author was updated successfully.');
        
    }

    public function destroy($id)
    {
        $author = Author::findOrFail($id);

        $author->delete();

        return redirect('/admin/author')->with('info', 'Author was deleted!'); 
    }

}
