<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Validation\Rule;
use App\Models\CollectionMethod;

class CollectionMethodController extends Controller
{

    public function index()
    {
        
        $models = CollectionMethod::orderBy('title_bn', 'asc')->paginate(15);

        return view('admin.cm.index', [
            'page_title' => "All Collection Methods",
            'page_subtitle' => "List of All Collection Methods",
            'models' => $models
        ]);

    }

    public function create()
    {
        return view('admin.cm.add', [
            'page_title' => "Add Collection Method",
            'page_subtitle' => "Add a new Collection Method"
        ]);
    }

    public function store()
    {
        $attributes = request()->validate([
            'title_bn' => ['required', Rule::unique('collection_methods', 'title_bn')],
            'title_en' => ['nullable', Rule::unique('collection_methods', 'title_en')]
        ]);

        CollectionMethod::create( $attributes );

        return redirect('/admin/collection_method')->withSuccess('Collection Method added successfully.');
    }

    public function show($id)
    {
        $model = CollectionMethod::findOrFail($id);

        return view('admin.cm.show', [
            'page_title' => 'Collection Method Details',
            'page_subtitle' => 'Collection Method details of ',
            'model' => $model
        ]);

    }

    public function edit($id)
    {
        $model = CollectionMethod::findOrFail($id);

        return view('admin.cm.edit', [
            'page_title' => 'Edit Collection Method',
            'page_subtitle' => 'Edit Details of',
            'model' => $model
        ]);
    }

    public function update($id)
    {

        $cm = CollectionMethod::findOrFail($id);

        $attributes = request()->validate([
            'title_bn' => ['required', Rule::unique('collection_methods', 'title_bn')->ignore($cm)],
            'title_en' => ['nullable', Rule::unique('collection_methods', 'title_en')->ignore($cm)]
        ]);

        $cm->update( $attributes );

        return redirect('/admin/collection_method')->withSuccess('Collection Method was updated successfully.');
        
    }

    public function destroy($id)
    {
        $cm = CollectionMethod::findOrFail($id);

        $cm->delete();

        return redirect('/admin/collection_method')->with('info', 'Collection Method was deleted!'); 
    }

}
