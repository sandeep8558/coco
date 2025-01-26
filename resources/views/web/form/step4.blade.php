<div>
    <div class="row g-3">

    <div class="col-12">

        <label for="">I am Parent/Guardian</label>

        <div class="form-check">
            <input class="form-check-input" type="radio" name="parentguardian" id="parentguardian1" value="parent" {{ request()->parentguardian == 'parent' ? 'checked' : '' }}>
            <label class="form-check-label" for="parentguardian1">I am parent</label>
        </div>

        <div class="form-check">
            <input class="form-check-input" type="radio" name="parentguardian" id="parentguardian2" value="guardian" {{ request()->parentguardian == 'guardian' ? 'checked' : '' }}>
            <label class="form-check-label" for="parentguardian2">I am guardian</label>
        </div>

        @if($errors->get('parentguardian'))
        @foreach($errors->get('parentguardian') as $err)
        {{ $err }}
        @endforeach
        @endif

    </div>

    <div id="singleparent" class="col-12 d-none">

        <label for="">Are you a single parent?</label>

        <div class="form-check">
            <input class="form-check-input" type="radio" name="singleparent" id="singleparent1" value="Yes"  {{ request()->singleparent == 'Yes' ? 'checked' : '' }}>
            <label class="form-check-label" for="singleparent1">Yes, I am.</label>
        </div>

        <div class="form-check">
            <input class="form-check-input" type="radio" name="singleparent" id="singleparent2" value="No" {{ request()->singleparent == 'No' ? 'checked' : '' }}>
            <label class="form-check-label" for="singleparent2">No</label>
        </div>

    </div>

    <div id="singlewho" class="col-12 d-none">

        <label for="">I am single</label>

        <div class="form-check">
            <input class="form-check-input" type="radio" name="singlewho" id="singlewho1" value="Mother" {{ request()->singlewho == 'Mother' ? 'checked' : '' }}>
            <label class="form-check-label" for="singlewho1">Mother</label>
        </div>

        <div class="form-check">
            <input class="form-check-input" type="radio" name="singlewho" id="singlewho2" value="Father" {{ request()->singlewho == 'Father' ? 'checked' : '' }}>
            <label class="form-check-label" for="singlewho2">Father</label>
        </div>

    </div>

    </div>
</div>