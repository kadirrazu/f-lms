<?php

namespace App\Exports;

use App\Models\Book;
use Maatwebsite\Excel\Concerns\FromCollection;

class BookExport implements FromCollection
{
    /**
    * @return \Illuminate\Support\Collection
    */
    public function collection()
    {
        $books = Book::with('authors')->with('categories')->get();

        $booksToReturn = [];

        foreach( $books as $book )
        {
            $booksToReturn[] = [
                'id' => $book->id,
                'title_bn' => $book->title_bn,
                'title_en' => $book->title_en,
                'author' => $book->author_id,
                'publisher' => $book->publisher->title_bn,
                'pages' => $book->pages,
                'printed_price' => $book->printed_price,
                'purchase_price' => $book->purchase_price,
                'entry_no' => $book->entry_no,
                'entry_date' => $book->entry_date,
                'created_by' => $book->createdBy->name
            ];
        }

        return collect($booksToReturn);
    }

    /**
     * Write code on Method
     *
     * @return response()
     */
    public function headings(): array
    {
        return [
            "ID", 
            "Title_Bn", 
            "Title_En", 
            "Author", 
            "Publisher", 
            "Pages", 
            "Printed Price", 
            "Purchase Price", 
            "Entry No", 
            "Entry Date", 
            "Entry By"
        ];
    }
}
