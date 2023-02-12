<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Validation\Rule;
use App\Models\Publisher;

class PublisherController extends Controller
{
    
    public function index()
    {
        
        $models = Publisher::orderBy('title_bn', 'asc')->get();

        return view('admin.publisher.index', [
            'page_title' => "All Publishers",
            'page_subtitle' => "List of All Publishers",
            'models' => $models
        ]);

    }

    public function create()
    {
        return view('admin.publisher.add', [
            'page_title' => "Add Publisher",
            'page_subtitle' => "Add a new Publisher"
        ]);
    }

    public function store()
    {
        $attributes = request()->validate([
            'title_bn' => ['required', Rule::unique('publishers', 'title_bn')],
            'title_en' => ['nullable', Rule::unique('publishers', 'title_en')],
            'slug' => ['nullable', Rule::unique('publishers', 'slug')],
            'status' => 'required|boolean'
        ]);

        Publisher::create( $attributes );

        return redirect('/admin/publisher')->withSuccess('Publisher added successfully.');
    }

    public function show($id)
    {
        $model = Publisher::find($id);

        return view('admin.publisher.show', [
            'page_title' => 'Publisher Details',
            'page_subtitle' => 'Publisher details of ',
            'model' => $model
        ]);

    }

    public function edit($id)
    {
        $model = Publisher::findOrFail($id);

        return view('admin.publisher.edit', [
            'page_title' => 'Edit Publisher',
            'page_subtitle' => 'Edit Details of',
            'model' => $model
        ]);
    }

    public function update(Publisher $publisher)
    {
        $attributes = request()->validate([
            'title_bn' => ['required', Rule::unique('publishers', 'title_bn')->ignore($publisher)],
            'title_en' => ['nullable', Rule::unique('publishers', 'title_en')->ignore($publisher)],
            'slug' => ['nullable', Rule::unique('publishers', 'slug')->ignore($publisher)],
            'status' => 'required|boolean'
        ]);

        $publisher->update( $attributes );

        return redirect('/admin/publisher')->withSuccess('Publisher was updated successfully.');
        
    }

    public function destroy($id)
    {
        $publisher = Publisher::findOrFail($id);

        $publisher->delete();

        return redirect('/admin/publisher')->with('info', 'Publisher was deleted!'); 
    }

    /*Ajax Request using Alpine to Search for Books*/
    public function ajaxPublisherSearch(Request $request)
    {
        $publishers = '{}';

        if( $request->post('query') != '' )
        {
            $publishers = Publisher::where('title_bn', 'like', '%' . $request->post('query') . '%')
                ->orWhere('title_en', 'like', '%' . $request->post('query') . '%')
                ->get();
        }

        return $publishers;
    }

}
