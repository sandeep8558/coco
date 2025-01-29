<div class="mb-5">
    <div class="row g-4 py-3 bg-light shadow">
        <h3>Mother's Details:</h3>
        <div class="col-12 col-xl-3">
            <div class="form-floating">
                <input type="text" class="form-control" id="mothersname" name="mothersname" value="{{ request()->mothersname }}">
                <label for="mothersname">Mothers's Name</label>
            </div>
            @if($errors->get('mothersname'))
            @foreach($errors->get('mothersname') as $err)
            <p class="text-danger">{{ $err }}</p>
            @endforeach
            @endif
        </div>

        <div class="col-12 col-xl-3">
            <div class="form-floating">
                <input type="text" class="form-control" id="mothersage" name="mothersage" value="{{ request()->mothersage }}">
                <label for="mothersage">Age</label>
            </div>
            @if($errors->get('mothersage'))
            @foreach($errors->get('mothersage') as $err)
            <p class="text-danger">{{ $err }}</p>
            @endforeach
            @endif
        </div>

        <div class="col-12 col-xl-3">
            <div class="form-floating">
                <input type="text" class="form-control" id="mothersnationality" name="mothersnationality" value="{{ request()->mothersnationality }}">
                <label for="mothersnationality">Nationality</label>
            </div>
            @if($errors->get('mothersnationality'))
            @foreach($errors->get('mothersnationality') as $err)
            <p class="text-danger">{{ $err }}</p>
            @endforeach
            @endif
        </div>

        <div class="col-12 col-xl-3">
            <div class="form-floating">
                <input type="text" class="form-control" id="mothersreligion" name="mothersreligion" value="{{ request()->mothersreligion }}">
                <label for="mothersreligion">Religion</label>
            </div>
            @if($errors->get('mothersreligion'))
            @foreach($errors->get('mothersreligion') as $err)
            <p class="text-danger">{{ $err }}</p>
            @endforeach
            @endif
        </div>

        <div class="col-12 col-xl-3">
            <div class="form-floating">
                <input type="text" class="form-control" id="mothersqualification" name="mothersqualification" value="{{ request()->mothersqualification }}">
                <label for="mothersqualification">Qualification</label>
            </div>
            @if($errors->get('mothersqualification'))
            @foreach($errors->get('mothersqualification') as $err)
            <p class="text-danger">{{ $err }}</p>
            @endforeach
            @endif
        </div>

        <div class="col-12 col-xl-3">
            <div class="form-floating">
                <input type="text" class="form-control" id="mothersschool_name" name="mothersschool_name" value="{{ request()->mothersschool_name }}">
                <label for="mothersschool_name">School Studied In</label>
            </div>
            @if($errors->get('mothersschool_name'))
            @foreach($errors->get('mothersschool_name') as $err)
            <p class="text-danger">{{ $err }}</p>
            @endforeach
            @endif
        </div>

        <div class="col-12 col-xl-3">
            <div class="form-floating">
                <input type="text" class="form-control" id="motherscollege_name" name="motherscollege_name" value="{{ request()->motherscollege_name }}">
                <label for="motherscollege_name">College Studied In</label>
            </div>
            @if($errors->get('motherscollege_name'))
            @foreach($errors->get('motherscollege_name') as $err)
            <p class="text-danger">{{ $err }}</p>
            @endforeach
            @endif
        </div>

        <div class="col-12 col-xl-3">
            <div class="form-floating">
                <input type="text" class="form-control" id="mothersprofession" name="mothersprofession" value="{{ request()->mothersprofession }}">
                <label for="mothersprofession">Profession</label>
            </div>
            @if($errors->get('mothersprofession'))
            @foreach($errors->get('mothersprofession') as $err)
            <p class="text-danger">{{ $err }}</p>
            @endforeach
            @endif
        </div>

        <div class="col-12 col-xl-8">
            <div class="form-floating">
                <input type="text" class="form-control" id="mothersoffice_address" name="mothersoffice_address" value="{{ request()->mothersoffice_address }}">
                <label for="mothersoffice_address">Office Address</label>
            </div>
            @if($errors->get('mothersoffice_address'))
            @foreach($errors->get('mothersoffice_address') as $err)
            <p class="text-danger">{{ $err }}</p>
            @endforeach
            @endif
        </div>

        <div class="col-12 col-xl-4">
            <div class="form-floating">
                <input type="text" class="form-control" id="motherscontact_number" name="motherscontact_number" value="{{ request()->motherscontact_number }}">
                <label for="motherscontact_number">Contact Number</label>
            </div>
            @if($errors->get('motherscontact_number'))
            @foreach($errors->get('motherscontact_number') as $err)
            <p class="text-danger">{{ $err }}</p>
            @endforeach
            @endif
        </div>

    </div>
</div>