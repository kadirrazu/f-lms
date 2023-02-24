<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Request as BookRequest;

class RequestController extends Controller
{

    public function index()
    {
        
        $models = BookRequest::orderBy('id', 'desc')->get();

        return view('admin.request.index', [
            'page_title' => "All Requests for Book Access",
            'page_subtitle' => "List of All Requests",
            'models' => $models
        ]);

    }

    

    public function show($id)
    {
        $model = BookRequest::find($id);

        return view('admin.request.show', [
            'page_title' => 'Book Access Request Details',
            'page_subtitle' => 'Access Request Details for ',
            'model' => $model
        ]);

    }


    public function edit($id)
    {
        $model = BookRequest::findOrFail($id);

        return view('admin.request.edit', [
            'page_title' => 'Edit Access Request Item',
            'page_subtitle' => 'Edit Access Request item entry for ',
            'model' => $model
        ]);
    }


    public function update($id)
    {

        $request = BookRequest::findOrFail($id);

        $attributes = request()->validate([
            'book_id' => 'required|numeric',
            'user_id' => 'required|numeric',
            'mobile' => 'nullable',
            'address' => 'nullable',
            'request_notes' => 'nullable',
            'terms_agreed' => 'required|numeric',
            'issued' => 'required|numeric',
            'returned' => 'required|numeric',
            'issue_date' => 'nullable|date',
            'return_date' => 'nullable|date',
            'admin_notes' => 'nullable',
        ]);

        $request->update( $attributes );

        return redirect('/admin/request')->withSuccess('Access Request was updated successfully.');
        
    }


    public function destroy($id)
    {
        $request = BookRequest::findOrFail($id);

        $request->delete();

        return redirect('/admin/request')->with('info', 'Access Request was deleted!');
    }


    public function fronendRequestSubmission(Request $request)
    {
        $attributes = $request->validate([
            'userId' => 'required|numeric',
            'bookId' => 'required|numeric',
            'contactNumber' => 'required',
            'contactAddress' => 'required',
            'requestNotes' => 'nullable',
        ]);

        $returnArray = [];

        if( $request->has('agreedWithTerms') && $request->input('agreedWithTerms') !== true )
        {
            $returnArray['response'] = false;
            $returnArray['message'] = 'You are not acknowledged with terms.';
        }
        else if( !auth()->check() || auth()->user()->id !== $attributes['userId'] )
        {
            $returnArray['response'] = false;
            $returnArray['message'] = 'Something looks like alterd intentionally! Operation failed.';
        }
        else
        {
            BookRequest::create(
                [
                    'user_id' => $attributes['userId'],
                    'book_id' => $attributes['bookId'],
                    'mobile' => $attributes['contactNumber'],
                    'address' => $attributes['contactAddress'],
                    'request_notes' => $attributes['requestNotes'],
                    'terms_agreed' => $request->input('agreedWithTerms') ? 1 : 0
                ]
            );

            $returnArray['response'] = true;
            $returnArray['message'] = 'Reques successfully logged into the system and administrator was notified.';

            //Prepare and Send Email to admin
            
        }

        return $returnArray;
    }
}
