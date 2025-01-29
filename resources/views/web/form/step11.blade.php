<div class="mb-5">
    <div class="row g-3 shadow py-3">
        <p class="fs-3">Documents Uploaded</p>
        @foreach($docs as $i => $doc)
        <div class="col-4">
            {{ $doc->document->document }}

            <br>
            <img src="{{ '/storage/'.request()->paths[$i] }}" style="width:100px;">
        </div>
        @endforeach

    </div>
</div>

<div class="container bg-light border mb-5">
    <div class="row mt-3">
        <div class="col-12">
            <h1 class="text-center">
                Review Application
            </h1>
        </div>
    </div>
</div>