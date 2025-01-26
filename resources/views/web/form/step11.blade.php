<div>
    <div class="row g-3 py-3">

        @foreach($docs as $i => $doc)
        <div class="col-12">
            {{ $doc->document->document }}

            <br>
            <img src="{{ '/storage/'.request()->paths[$i] }}" style="width:100px;">
        </div>
        @endforeach

    </div>
</div>