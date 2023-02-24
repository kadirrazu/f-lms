<x-layout-frontend>

<div class="row">

    <div class="col-12 text-center border-bottom pb-2">
        <h5 class="h5">
            ক্যাটাগরী ক্লাউডস্‌
        </h5>
    </div>

    <div class="col-12 mt-3 text-center">

        @foreach($categories as $category)

            <a href="{{ url('view-category/' . $category->id ) }}" class="btn btn-outline-info me-2 mb-2 text-dark">
                {{ $category->title_bn }} 
                <span class="text-primary"> ({{ convertEnToBnNumber(count($category->books)) }}) </span>
            </a>

        @endforeach

    </div>

</div>

</x-layout-frontend>