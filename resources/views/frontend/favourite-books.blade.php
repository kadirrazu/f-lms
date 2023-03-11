<x-layout-frontend>

<div class="row">

    <div class="col-12 text-center border-bottom pb-2">
        <h5 class="h5">প্রিয় বইয়ের তালিকা</h5>
    </div>

    <div class="col-12 pt-2">
        
    @if( count($favourites) > 0 )

    <div class="table-responsive">

        <table class="table table-bordered align-middle">
            <thead>
                <tr class="align-middle text-center">
                    <th scope="col" class="text-center">ক্রমিক</th>
                    <th scope="col">ছবি</th>
                    <th scope="col">বইয়ের শিরোনাম</th>
                    <th scope="col">লেখক</th>
                    <th scope="col">প্রকাশক</th>
                    <th scope="col">যে তারিখে যুক্ত করা হয়েছে</th>
                    <th scope="col">ডিলিট/রিমুভ</th>
                </tr>
            </thead>
            <tbody>

                @php( $count = 1 )

                @foreach( $favourites as $favourite )
                <tr class="align-middle">
                    <td class="text-center">
                        {{ convertEnToBnNumber($count) }}
                    </td>

                    <td class="text-center">
                        <a href="{{ url('view-book/' . $favourite->book->id) }}" title="Book Details">
                            @if( $favourite->book->image != null )
                                <img src="{{ asset('/resized-images/thumbs-75/' . str_replace('thumbnails/', '', $favourite->book->image)) }}" alt="IMG" class="table-thumb-img">
                            @else
                                <img src="https://via.placeholder.com/75x80?text=No+Image" alt="IMG" class="table-thumb-img">
                            @endif
                        </a>
                    </td>

                    <td>
                        <a href="{{ url('view-book/' . $favourite->book->id) }}" title="Book Details">
                            {{ $favourite->book->title_bn }}
                        </a>
                    </td>

                    <td>
                        @if(count($favourite->book->authors) > 0)

                            @foreach($favourite->book->authors as $author)

                                <a href="{{ url('view-author/' . $author->id) }}">
                                    {{ $author->title_bn }}
                                </a>

                                {!! ($loop->count > 1 && !$loop->last) ? '<br>' : '' !!}

                            @endforeach

                        @else
                            -
                        @endif
                    </td>

                    <td class="text-center">
                        <a href="{{ url('view-publisher/' . $favourite->book->publisher->id) }}">
                            {{ $favourite->book->publisher->title_bn }}
                        </a>
                    </td>

                    <td class="text-center">
                        {{ convertEnToBnNumber(date("d-m-Y", strtotime($favourite->toArray()['created_at']))) }}
                    </td>

                    <td class="text-center" x-data="{
                        confirm : function(event){
                            result = confirm('Sure? You want to delete this record?');
                            if( result === false){
                                event.preventDefault()
                            }
                        }
                    }">
                        <a href="{{ url('remove-favourite/' . $favourite->toArray()['id']) }}" class="btn btn-sm btn-outline-danger" confirm="Sure? You really want to Delete?" @click="confirm" title="Remove">
                            <i class="bi bi-x-circle"></i>
                        </a>
                    </td>

                    @php($count++)
                </tr>
                @endforeach
            </tbody>
        </table>
        
    </div>

    @else

        <p class="alert alert-info text-center">
            আপনার প্রিয় বইয়ের তালিকায় এখন পর্যন্ত কোন বই যোগ করা হয়নি।
        </p>

    @endif

    </div>
</div>

</x-layout-frontend>