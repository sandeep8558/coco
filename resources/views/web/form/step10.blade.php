<div class="mb-5">
    <div class="row g-3 py-2 bg-light shadow">
        <h3>Upload Documents:</h3>
        <div class="col-12">
            <h6>Kindly upload scanned copies of following documents:</h6>
            <ul>
                @foreach($docs as $i => $doc)
                <div class="">
                <li>  {{ $doc->document->document }}</li>
                    
                </div>
                @endforeach
            </ul>
            
        </div>

        @foreach($docs as $i => $doc)
        <div class="col-12 mt-5">
            <h4>{{ $doc->document->document }}  </h4>  
            <input type="file" class="hidden" name="docs[]" id="doc_{{ $doc->document_id }}" value="">
            <input type="text" name="document_id[]" id="document_id_{{ $doc->document_id }}" value="{{ $doc->document_id }}">
        </div>
        @endforeach

        @if(session()->has('fileError'))
        <div> <p class="text-danger">{{ session()->get('fileError') }}</p></div>
        @endif

        <!-- <div class="row g-3 py-3">

        
        </div> -->
        

    </div>
</div>