<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Validation\Rule;
use App\Models\State;

class StateController extends Controller
{
    
    public function index()
    {
        
        $models = State::orderBy('title_bn', 'asc')->paginate(15);

        return view('admin.state.index', [
            'page_title' => "All States",
            'page_subtitle' => "List of All State",
            'models' => $models
        ]);

    }

    public function create()
    {
        return view('admin.state.add', [
            'page_title' => "Add State",
            'page_subtitle' => "Add a new State"
        ]);
    }

    public function store()
    {
        $attributes = request()->validate([
            'title_bn' => ['required', Rule::unique('states', 'title_bn')],
            'title_en' => ['nullable', Rule::unique('states', 'title_en')],
        ]);

        State::create( $attributes );

        return redirect('/admin/state')->withSuccess('State added successfully.');
    }

    public function show($id)
    {
        $model = State::find($id);

        return view('admin.state.show', [
            'page_title' => 'State Details',
            'page_subtitle' => 'Details of ',
            'model' => $model
        ]);

    }

    public function edit($id)
    {
        $model = State::findOrFail($id);

        return view('admin.state.edit', [
            'page_title' => 'Edit State',
            'page_subtitle' => 'Edit ',
            'model' => $model
        ]);
    }

    public function update(State $state)
    {
        $attributes = request()->validate([
            'title_bn' => ['required', Rule::unique('states', 'title_bn')->ignore($state)],
            'title_en' => ['nullable', Rule::unique('states', 'title_en')->ignore($state)],
        ]);

        $state->update( $attributes );

        return redirect('/admin/state')->withSuccess('State was updated successfully.');
        
    }

    public function destroy($id)
    {
        $model = State::findOrFail($id);

        $model->delete();

        return redirect('/admin/state')->with('info', 'State was deleted!'); 
    }

}
