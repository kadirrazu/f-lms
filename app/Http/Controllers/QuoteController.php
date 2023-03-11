<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Validation\Rule;
use App\Models\Quote;
use Illuminate\Support\Facades\Cache;

class QuoteController extends Controller
{
    
    public function index()
    {
        
        $models = Quote::orderBy('id', 'desc')->get();

        return view('admin.quote.index', [
            'page_title' => "All Quotes",
            'page_subtitle' => "List of All Quotes",
            'models' => $models
        ]);

    }

    public function create()
    {
        return view('admin.quote.add', [
            'page_title' => "Add Quote",
            'page_subtitle' => "Add a new Quote"
        ]);
    }

    public function store()
    {
        $attributes = request()->validate([
            'quote_text' => ['required'],
            'quote_by' => ['required'],
            'quote_from' => ['nullable'],
            'show' => 'required|boolean'
        ]);

        Quote::create( $attributes );
        
        if(Cache::has('quotes.all')) 
        {
            Cache::forget('quotes.all');
        }

        return redirect('/admin/quote')->withSuccess('Quote added successfully.');
    }

    public function show($id)
    {
        $model = Quote::find($id);

        return view('admin.quote.show', [
            'page_title' => 'Quote Details',
            'page_subtitle' => 'Details of ',
            'model' => $model
        ]);

    }

    public function edit($id)
    {
        $model = Quote::findOrFail($id);

        return view('admin.quote.edit', [
            'page_title' => 'Edit Quote',
            'page_subtitle' => 'Edit Details of',
            'model' => $model
        ]);
    }

    public function update(Quote $quote)
    {
        $attributes = request()->validate([
            'quote_text' => ['required'],
            'quote_by' => ['required'],
            'quote_from' => ['nullable'],
            'show' => 'required|boolean'
        ]);

        $quote->update( $attributes );
        
        if(Cache::has('quotes.all')) 
        {
            Cache::forget('quotes.all');
        }

        return redirect('/admin/quote')->withSuccess('Quote was updated successfully.');
        
    }

    public function destroy($id)
    {
        $quote = Quote::findOrFail($id);

        $quote->delete();

        return redirect('/admin/quote')->with('info', 'Quote was deleted!'); 
    }

}
