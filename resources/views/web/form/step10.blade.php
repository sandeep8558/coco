<div>
    <div class="row g-3 py-3">

        @foreach($docs as $i => $doc)
        <div class="col-12">
            {{ $doc->document->document }}

            <br>
            <input type="file" name="docs[]" id="doc_{{ $doc->document_id }}" value="">
            <input type="text" name="document_id[]" id="document_id_{{ $doc->document_id }}" value="{{ $doc->document_id }}">
        </div>
        @endforeach

        @if(session()->has('fileError'))
        <div>{{ session()->get('fileError') }}</div>
        @endif

        <div class="row g-3 py-3">

        @foreach($docs as $i => $doc)
        <div class="col-12">
            {{ $doc->document->document }}
            
        </div>
        @endforeach

    </div>

    </div>
</div>