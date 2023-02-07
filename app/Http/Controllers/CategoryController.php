<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Validation\Rule;
use App\Models\Category;

class CategoryController extends Controller
{
    
    public function index()
    {
        
        $models = Category::orderBy('title_bn', 'asc')->paginate(15);

        return view('admin.category.index', [
            'page_title' => "All Categories",
            'page_subtitle' => "List of All Categories",
            'models' => $models
        ]);

    }

    public function create()
    {
        return view('admin.category.add', [
            'page_title' => "Add Category",
            'page_subtitle' => "Add a new Category"
        ]);
    }

    public function store()
    {
        $attributes = request()->validate([
            'title_bn' => ['required', Rule::unique('categories', 'title_bn')],
            'title_en' => ['nullable', Rule::unique('categories', 'title_en')],
            'slug' => ['nullable', Rule::unique('categories', 'slug')],
            'status' => 'required|boolean'
        ]);

        Category::create( $attributes );

        return redirect('/admin/category')->withSuccess('Category added successfully.');
    }

    public function show($id)
    {
        $model = Category::find($id);

        return view('admin.category.show', [
            'page_title' => 'Category Details',
            'page_subtitle' => 'Details of ',
            'model' => $model
        ]);

    }

    public function edit($id)
    {
        $model = Category::findOrFail($id);

        return view('admin.category.edit', [
            'page_title' => 'Edit Category',
            'page_subtitle' => 'Edit Details of',
            'model' => $model
        ]);
    }

    public function update(Category $category)
    {
        $attributes = request()->validate([
            'title_bn' => ['required', Rule::unique('categories', 'title_bn')->ignore($category)],
            'title_en' => ['nullable', Rule::unique('categories', 'title_en')->ignore($category)],
            'slug' => ['nullable', Rule::unique('categories', 'slug')->ignore($category)],
            'status' => 'required|boolean'
        ]);

        $category->update( $attributes );

        return redirect('/admin/category')->withSuccess('Category was updated successfully.');
        
    }

    public function destroy($id)
    {
        $category = Category::findOrFail($id);

        $category->delete();

        return redirect('/admin/category')->with('info', 'Category was deleted!'); 
    }

}
