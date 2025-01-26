<div>
    <div class="row g-4 mb-5">

        <div class="col-12 col-xl-3">
            <div class="form-floating">
                <input type="text" class="form-control" id="guardiansname" name="guardiansname" value="{{ request()->guardiansname }}">
                <label for="guardiansname">Guardians's Name</label>
            </div>
            @if($errors->get('guardiansname'))
            @foreach($errors->get('guardiansname') as $err)
            {{ $err }}
            @endforeach
            @endif
        </div>

        <div class="col-12 col-xl-3">
            <div class="form-floating">
                <input type="text" class="form-control" id="guardiansage" name="guardiansage" value="{{ request()->guardiansage }}">
                <label for="guardiansage">Age</label>
            </div>
            @if($errors->get('guardiansage'))
            @foreach($errors->get('guardiansage') as $err)
            {{ $err }}
            @endforeach
            @endif
        </div>

        <div class="col-12 col-xl-3">
            <div class="form-floating">
                <input type="text" class="form-control" id="guardiansnationality" name="guardiansnationality" value="{{ request()->guardiansnationality }}">
                <label for="guardiansnationality">Nationality</label>
            </div>
            @if($errors->get('guardiansnationality'))
            @foreach($errors->get('guardiansnationality') as $err)
            {{ $err }}
            @endforeach
            @endif
        </div>

        <div class="col-12 col-xl-3">
            <div class="form-floating">
                <input type="text" class="form-control" id="guardiansreligion" name="guardiansreligion" value="{{ request()->guardiansreligion }}">
                <label for="guardiansreligion">Religion</label>
            </div>
            @if($errors->get('guardiansreligion'))
            @foreach($errors->get('guardiansreligion') as $err)
            {{ $err }}
            @endforeach
            @endif
        </div>

        <div class="col-12 col-xl-3">
            <div class="form-floating">
                <input type="text" class="form-control" id="guardiansqualification" name="guardiansqualification" value="{{ request()->guardiansqualification }}">
                <label for="guardiansqualification">Qualification</label>
            </div>
            @if($errors->get('guardiansqualification'))
            @foreach($errors->get('guardiansqualification') as $err)
            {{ $err }}
            @endforeach
            @endif
        </div>

        <div class="col-12 col-xl-3">
            <div class="form-floating">
                <input type="text" class="form-control" id="guardiansschool_name" name="guardiansschool_name" value="{{ request()->guardiansschool_name }}">
                <label for="guardiansschool_name">School Studied In</label>
            </div>
            @if($errors->get('guardiansschool_name'))
            @foreach($errors->get('guardiansschool_name') as $err)
            {{ $err }}
            @endforeach
            @endif
        </div>

        <div class="col-12 col-xl-3">
            <div class="form-floating">
                <input type="text" class="form-control" id="guardianscollege_name" name="guardianscollege_name" value="{{ request()->guardianscollege_name }}">
                <label for="guardianscollege_name">College Studied In</label>
            </div>
            @if($errors->get('guardianscollege_name'))
            @foreach($errors->get('guardianscollege_name') as $err)
            {{ $err }}
            @endforeach
            @endif
        </div>

        <div class="col-12 col-xl-3">
            <div class="form-floating">
                <input type="text" class="form-control" id="guardiansprofession" name="guardiansprofession" value="{{ request()->guardiansprofession }}">
                <label for="guardiansprofession">Profession</label>
            </div>
            @if($errors->get('guardiansprofession'))
            @foreach($errors->get('guardiansprofession') as $err)
            {{ $err }}
            @endforeach
            @endif
        </div>

        <div class="col-12 col-xl-3">
            <div class="form-floating">
                <input type="text" class="form-control" id="guardiansoffice_address" name="guardiansoffice_address" value="{{ request()->guardiansoffice_address }}">
                <label for="guardiansoffice_address">Office Address</label>
            </div>
            @if($errors->get('guardiansoffice_address'))
            @foreach($errors->get('guardiansoffice_address') as $err)
            {{ $err }}
            @endforeach
            @endif
        </div>

        <div class="col-12 col-xl-3">
            <div class="form-floating">
                <input type="text" class="form-control" id="guardianscontact_number" name="guardianscontact_number" value="{{ request()->guardianscontact_number }}">
                <label for="guardianscontact_number">Contact Number</label>
            </div>
            @if($errors->get('guardianscontact_number'))
            @foreach($errors->get('guardianscontact_number') as $err)
            {{ $err }}
            @endforeach
            @endif
        </div>

    </div>
</div>