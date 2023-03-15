<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\Cache;
use App\Models\Book;
use Image;

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

        $directory1 = 'resized-images/thumbs-75';
        $directory2 = 'resized-images/thumbs-150';

        $imagesExistsInFolder = [];
        $imagesExistsInTable = [];
        $imagesDeleted = [];

        $replaceText = 'thumbnails/';
        $replaceWith = '';
        
        $filesInFolder = File::files( storage_path( $directory ) );

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

                if(File::exists( public_path( $directory1 . '/' . $folderImage ) ) )
                {
                    File::delete( public_path( $directory1 . '/' . $folderImage ) );
                }

                if(File::exists( public_path( $directory2 . '/' . $folderImage ) ) )
                {
                    File::delete( public_path( $directory2 . '/' . $folderImage ) );
                }

            }
        }

        $msg = $deleteCount . ' file(s) deleted from the storage.';

        return redirect()->back()->withError($msg);
    }

    public function resizeImages(Request $request)
    {
	    
        $imagesExistsInThumbnailsFolder = [];
        $imagesExistsInResizedFolder = [];
        $imagesToResize = [];

        $imgInResizeFolder = File::files( public_path( 'resized-images/thumbs-75' ) );

        $filesInFolder = File::files( storage_path( 'app/public/thumbnails' ) );

        foreach($filesInFolder as $path) 
        { 
            $file = pathinfo($path);
            $imagesExistsInThumbnailsFolder[] = $file['filename'] . '.' . $file['extension'];
        }

        if( count($imgInResizeFolder) > 0 )
        {
            foreach($imgInResizeFolder as $path) 
            { 
                $file = pathinfo($path);
                $imagesExistsInResizedFolder[] = $file['filename'] . '.' . $file['extension'];
            }
        }

        foreach($filesInFolder as $path) 
        { 
            $file = pathinfo($path);
            $imageName = $file['filename'] . '.' . $file['extension'];
            if( !in_array($imageName, $imagesExistsInResizedFolder))
            {
                $imagesToResize[] = $imageName;
            }
        }

        $destinationPath1 = public_path('/resized-images/thumbs-75');
        $destinationPath2 = public_path('/resized-images/thumbs-150');

        $count = 0;

        foreach($imagesToResize as $toReziseImg) 
        {

            $imgFile = Image::make(storage_path( 'app/public/thumbnails/' . $toReziseImg ));
    
            $imgFile->resize(75, null, function ($constraint) {
                $constraint->aspectRatio();
            })->save($destinationPath1.'/'.$toReziseImg);

            $imgFile->resize(150, null, function ($constraint) {
                $constraint->aspectRatio();
            })->save($destinationPath2.'/'.$toReziseImg);

            $count++;
            
        }

        $msg = $count . ' image file(s) were resized and placed in storage.';

        return redirect()->back()->withSuccess($msg);
            
    }

    public function cleanCache()
    {
        Cache::flush();

        return redirect()->back()->withSuccess("All Cache Cleaned Successfully.");
    }

}
