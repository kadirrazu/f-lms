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

        $timestamp = date("Y-m-d-h:i:s");
        $filename = 'all-books-'.$timestamp.'.xlsx';

        return Excel::download(new BookExport, $filename);

    }
}
