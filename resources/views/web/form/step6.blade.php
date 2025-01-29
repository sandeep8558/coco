<div class="mb-5">
    <div class="row bg-light py-3 shadow g-4">
    <h3>Father's Details:</h3>
        <div class="col-12 col-xl-3">
            <div class="form-floating">
                <input type="text" class="form-control" id="fathersname" name="fathersname" value="{{ request()->fathersname }}">
                <label for="fathersname">Fathers's Name</label>
            </div>
            @if($errors->get('fathersname'))
            @foreach($errors->get('fathersname') as $err)
            <p class="text-danger">{{ $err }}</p>
            @endforeach
            @endif
        </div>

        <div class="col-12 col-xl-3">
            <div class="form-floating">
                <input type="text" class="form-control" id="fathersage" name="fathersage" value="{{ request()->fathersage }}">
                <label for="fathersage">Age</label>
            </div>
            @if($errors->get('fathersage'))
            @foreach($errors->get('fathersage') as $err)
            <p class="text-danger">{{ $err }}</p>
            @endforeach
            @endif
        </div>

        <div class="col-12 col-xl-3">
            <div class="form-floating">
                <input type="text" class="form-control" id="fathersnationality" name="fathersnationality" value="{{ request()->fathersnationality }}">
                <label for="fathersnationality">Nationality</label>
            </div>
            @if($errors->get('fathersnationality'))
            @foreach($errors->get('fathersnationality') as $err)
            <p class="text-danger">{{ $err }}</p>
            @endforeach
            @endif
        </div>

        <div class="col-12 col-xl-3">
            <div class="form-floating">
                <input type="text" class="form-control" id="fathersreligion" name="fathersreligion" value="{{ request()->fathersreligion }}">
                <label for="fathersreligion">Religion</label>
            </div>
            @if($errors->get('fathersreligion'))
            @foreach($errors->get('fathersreligion') as $err)
            <p class="text-danger">{{ $err }}</p>
            @endforeach
            @endif
        </div>

        <div class="col-12 col-xl-3">
            <div class="form-floating">
                <input type="text" class="form-control" id="fathersqualification" name="fathersqualification" value="{{ request()->fathersqualification }}">
                <label for="fathersqualification">Qualification</label>
            </div>
            @if($errors->get('fathersqualification'))
            @foreach($errors->get('fathersqualification') as $err)
            <p class="text-danger">{{ $err }}</p>
            @endforeach
            @endif
        </div>

        <div class="col-12 col-xl-3">
            <div class="form-floating">
                <input type="text" class="form-control" id="fathersschool_name" name="fathersschool_name" value="{{ request()->fathersschool_name }}">
                <label for="fathersschool_name">School Studied In</label>
            </div>
            @if($errors->get('fathersschool_name'))
            @foreach($errors->get('fathersschool_name') as $err)
            <p class="text-danger">{{ $err }}</p>
            @endforeach
            @endif
        </div>

        <div class="col-12 col-xl-3">
            <div class="form-floating">
                <input type="text" class="form-control" id="fatherscollege_name" name="fatherscollege_name" value="{{ request()->fatherscollege_name }}">
                <label for="fatherscollege_name">College Studied In</label>
            </div>
            @if($errors->get('fatherscollege_name'))
            @foreach($errors->get('fatherscollege_name') as $err)
            <p class="text-danger">{{ $err }}</p>
            @endforeach
            @endif
        </div>

        <div class="col-12 col-xl-3">
            <div class="form-floating">
                <input type="text" class="form-control" id="fathersprofession" name="fathersprofession" value="{{ request()->fathersprofession }}">
                <label for="fathersprofession">Profession</label>
            </div>
            @if($errors->get('fathersprofession'))
            @foreach($errors->get('fathersprofession') as $err)
            <p class="text-danger">{{ $err }}</p>
            @endforeach
            @endif
        </div>

        <div class="col-12 col-xl-8">
            <div class="form-floating">
                <input type="text" class="form-control" id="fathersoffice_address" name="fathersoffice_address" value="{{ request()->fathersoffice_address }}">
                <label for="fathersoffice_address">Office Address</label>
            </div>
            @if($errors->get('fathersoffice_address'))
            @foreach($errors->get('fathersoffice_address') as $err)
            <p class="text-danger">{{ $err }}</p>
            @endforeach
            @endif
        </div>

        <div class="col-12 col-xl-4">
            <div class="form-floating">
                <input type="text" class="form-control" id="fatherscontact_number" name="fatherscontact_number" value="{{ request()->fatherscontact_number }}">
                <label for="fatherscontact_number">Contact Number</label>
            </div>
            @if($errors->get('fatherscontact_number'))
            @foreach($errors->get('fatherscontact_number') as $err)
            <p class="text-danger">{{ $err }}</p>
            @endforeach
            @endif
        </div>

    </div>
</div>