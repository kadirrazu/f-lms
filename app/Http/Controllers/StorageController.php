<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Validation\Rule;
use App\Models\Storage;

class StorageController extends Controller
{
    
    public function index()
    {
        
        $models = Storage::orderBy('title_bn', 'asc')->paginate(15);

        return view('admin.storage.index', [
            'page_title' => "All Storage",
            'page_subtitle' => "List of All Storage",
            'models' => $models
        ]);

    }

    public function create()
    {
        return view('admin.storage.add', [
            'page_title' => "Add Storage",
            'page_subtitle' => "Add a new Storage"
        ]);
    }

    public function store()
    {
        $attributes = request()->validate([
            'title_bn' => ['required', Rule::unique('storages', 'title_bn')],
            'title_en' => ['nullable', Rule::unique('storages', 'title_en')],
            'slug' => ['nullable', Rule::unique('storages', 'slug')],
            'status' => 'required|boolean'
        ]);

        Storage::create( $attributes );

        return redirect('/admin/storage')->withSuccess('Storage added successfully.');
    }

    public function show($id)
    {
        $model = Storage::find($id);

        return view('admin.storage.show', [
            'page_title' => 'Storage Details',
            'page_subtitle' => 'Storage details of ',
            'model' => $model
        ]);

    }

    public function edit($id)
    {
        $model = Storage::findOrFail($id);

        return view('admin.storage.edit', [
            'page_title' => 'Edit Storage',
            'page_subtitle' => 'Edit Storage of',
            'model' => $model
        ]);
    }

    public function update(Storage $storage)
    {
        $attributes = request()->validate([
            'title_bn' => ['required', Rule::unique('storages', 'title_bn')->ignore($storage)],
            'title_en' => ['nullable', Rule::unique('storages', 'title_en')->ignore($storage)],
            'slug' => ['nullable', Rule::unique('storages', 'slug')->ignore($storage)],
            'status' => 'required|boolean'
        ]);

        $storage->update( $attributes );

        return redirect('/admin/storage')->withSuccess('Storage was updated successfully.');
        
    }

    public function destroy($id)
    {
        $model = Storage::findOrFail($id);

        $model->delete();

        return redirect('/admin/storage')->with('info', 'Storage was deleted!'); 
    }

}
