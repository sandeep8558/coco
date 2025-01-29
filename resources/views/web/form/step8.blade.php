<div class="mb-5">
    <div class="row bg-light py-3 shadow g-4">
        <h3>Sibling Details:</h3>
        <div class="col-12 col-xl-6">
            <div class="form-floating">
                <input type="number" class="form-control" id="no_of_brothers" name="no_of_brothers" value="{{ request()->no_of_brothers }}">
                <label for="no_of_brothers">Number of Brothers</label>
            </div>
            @if($errors->get('no_of_brothers'))
            @foreach($errors->get('no_of_brothers') as $err)
            <p class="text-danger">{{ $err }}</p>
            @endforeach
            @endif
        </div>

        <div class="col-12 col-xl-6">
            <div class="form-floating">
                <input type="number" class="form-control" id="no_of_sisters" name="no_of_sisters" value="{{ request()->no_of_sisters }}">
                <label for="no_of_sisters">Number of Sisters</label>
            </div>
            @if($errors->get('no_of_sisters'))
            @foreach($errors->get('no_of_sisters') as $err)
            <p class="text-danger">{{ $err }}</p>
            @endforeach
            @endif
        </div>

    </div>
</div>