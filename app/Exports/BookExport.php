<?php

namespace App\Exports;

use App\Models\Book;
use Maatwebsite\Excel\Concerns\FromCollection;
use Maatwebsite\Excel\Concerns\WithHeadings;

class BookExport implements FromCollection, WithHeadings
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
            $returnData1 = [
                'entry_no' => $book->entry_no,
                'entry_date' => date("d-m-Y", strtotime($book->entry_date)) ?? '-',
                'title_bn' => $book->title_bn,
                'title_en' => strtoupper($book->title_en),
            ];

            $returnData3 = [
                'publisher' => $book->publisher->title_bn,
                'pages' => $book->pages,
                'printed_price' => $book->printed_price,
                'purchase_price' => $book->purchase_price ?? 0,
                'created_by' => $book->createdBy->name,
                'book_id' => $book->id
            ];

            $authorData = '';

            foreach($book->authors as $author){
                $authorData .= $author->title_bn . ' ';
            }

            $returnData2 = [
                'authors' => trim($authorData)
            ];

            $booksToReturn[] = array_merge($returnData1, $returnData2, $returnData3);
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
            "ENTRY NO", 
            "ENTRY DATE", 
            "BOOK TITLE (BN)", 
            "BOOK TITLE (EN)", 
            "AUTHOR(S)", 
            "PUBLISHER", 
            "PAGES", 
            "PRINTED PRICE", 
            "PURCHASE PRICE",
            "ENTRY BY",
            "BOOK ID"
        ];
    }
}
