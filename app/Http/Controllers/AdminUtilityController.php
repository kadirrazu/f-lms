<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Facades\Storage;
use App\Models\Book;

class AdminUtilityController extends Controller
{
    
    public function index()
    {
        $filesInFolder = File::files( storage_path( 'app/public/thumbnails' ) );
        $booksWithImages = Book::where('image', '!=', NULL)->get();

        $folderImgCount = count($filesInFolder);
        $tableImageCount = count($booksWithImages);

        return view('admin.utility.index', [
            'folderImgCount' => $folderImgCount,
            'tableImageCount' => $tableImageCount
        ]);
    }
    
    public function deleteUnusedImages()
    {
        
        $directory = 'app/public/thumbnails';
        $imagesExistsInFolder = [];
        $imagesExistsInTable = [];
        $imagesDeleted = [];

        $replaceText = 'thumbnails/';
        $replaceWith = '';
        
        $filesInFolder = File::files( storage_path( $directory ) );

        //dd($filesInFolder);

        foreach($filesInFolder as $path) 
        { 
            $file = pathinfo($path);
            $imagesExistsInFolder[] = $file['filename'] . '.' . $file['extension'];
        } 

        $booksWithImages = Book::where('image', '!=', NULL)->get();

        foreach( $booksWithImages as $book )
        {
            $imagesExistsInTable[] = str_replace($replaceText, $replaceWith, $book->image);
        }

        $deleteCount = 0;

        foreach( $imagesExistsInFolder as $folderImage)
        {
            if(!in_array($folderImage, $imagesExistsInTable))
            {
                $imagesDeleted[] = $folderImage;
                File::delete( storage_path( $directory . '/' . $folderImage ) );
                $deleteCount++;
            }
        }

        $msg = $deleteCount . ' file(s) deleted from the storage.';

        return redirect()->back()->withError($msg);
    }

    public function resizeUploadedImages()
    {

	    $this->validate($request, [
            'file' => 'required|image|mimes:jpg,jpeg,png,gif,svg|max:2048',
        ]);
        $image = $request->file('file');
        $input['file'] = time().'.'.$image->getClientOriginalExtension();
        
        $destinationPath = public_path('/thumbnail');
        $imgFile = Image::make($image->getRealPath());
        $imgFile->resize(150, 150, function ($constraint) {
		    $constraint->aspectRatio();
		})->save($destinationPath.'/'.$input['file']);
        $destinationPath = public_path('/uploads');
        $image->move($destinationPath, $input['file']);
        return back()
        	->with('success','Image has successfully uploaded.')
        	->with('fileName',$input['file']);
            
    }
}
