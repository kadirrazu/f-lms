<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Exports\BookExport;
use Maatwebsite\Excel\Facades\Excel;

class ExportController extends Controller
{
    public function index()
    {
        return view('admin.export.index');
    }

    public function exportToExcel()
    {

        // set the default timezone to use.
        date_default_timezone_set('Asia/Dhaka');

        $timestamp = date("d-m-Y-h:i:s");
        $filename = 'Exported_Books_List-'.$timestamp.'.xlsx';

        return Excel::download(new BookExport, $filename);

    }
}
