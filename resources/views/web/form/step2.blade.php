<div class="mb-5">
    <div class="row bg-light py-3 shadow g-4">
        <h3>Personal Details:</h3>
        <div class="col-12 col-xl-3 col-md-6">
            <div class="form-floating">
                <input type="text" class="form-control" id="surname" name="surname" value="{{ request()->surname }}">
                <label for="surname">Surname</label>
            </div>
            @if($errors->get('surname'))
            @foreach($errors->get('surname') as $err)
            <p class="text-danger">{{ $err }}</p>
            @endforeach
            @endif
        </div>

        <div class="col-12 col-xl-3 col-md-6">
            <div class="form-floating">
                <input type="text" class="form-control" id="students_name" name="students_name" value="{{ request()->students_name }}">
                <label for="students_name">Student Name</label>
            </div>
            @if($errors->get('students_name'))
            @foreach($errors->get('students_name') as $err)
            <p class="text-danger">{{ $err }}</p>
            @endforeach
            @endif
        </div>

        <div class="col-12 col-xl-3 col-md-6">
            <div class="form-floating">
                <input type="text" class="form-control" id="fathers_name" name="fathers_name" value="{{ request()->fathers_name }}">
                <label for="fathers_name">Father's Name</label>
            </div>
            @if($errors->get('fathers_name'))
            @foreach($errors->get('fathers_name') as $err)
            <p class="text-danger">{{ $err }}</p>
            @endforeach
            @endif
        </div>

        <div class="col-12 col-xl-3 col-md-6">
            <div class="form-floating">
                <input type="text" class="form-control" id="mothers_name" name="mothers_name" value="{{ request()->mothers_name }}">
                <label for="mothers_name">Mother's Name</label>
            </div>
            @if($errors->get('mothers_name'))
            @foreach($errors->get('mothers_name') as $err)
            <p class="text-danger">{{ $err }}</p>
            @endforeach
            @endif
        </div>

        <div class="col-12 col-md-6">
            <select class="form-select" id="gender" name="gender" value="{{ request()->gender }}">
                <option value="">Select Gender</option>
                <option {{ (request()->gender == 'Male') ? 'selected' : '' }} value="Male">Male</option>
                <option {{ (request()->gender == 'Female') ? 'selected' : '' }} value="Female">Female</option>
                <option {{ (request()->gender == 'Other') ? 'selected' : '' }} value="Other">Other</option>
            </select>
            @if($errors->get('gender'))
            @foreach($errors->get('gender') as $err)
            <p class="text-danger">{{ $err }}</p>
            @endforeach
            @endif
        </div>
    
        <div class="col-12 col-md-6">
            <select class="form-select" id="blood_group" name="blood_group" value="{{ request()->blood_group }}">
                <option value="">Select Blood Group</option>
                <option {{ (request()->blood_group == 'O+ve') ? 'selected' : '' }} value="O+ve">O+ve</option>
                <option {{ (request()->blood_group == 'O-ve') ? 'selected' : '' }} value="O-ve">O-ve</option>
                <option {{ (request()->blood_group == 'A+ve') ? 'selected' : '' }} value="A+ve">A+ve</option>
                <option {{ (request()->blood_group == 'A-ve') ? 'selected' : '' }} value="A-ve">A-ve</option>
                <option {{ (request()->blood_group == 'B+ve') ? 'selected' : '' }} value="B+ve">B+ve</option>
                <option {{ (request()->blood_group == 'B-ve') ? 'selected' : '' }} value="B-ve">B-ve</option>
                <option {{ (request()->blood_group == 'AB+ve') ? 'selected' : '' }} value="AB+ve">AB+ve</option>
                <option {{ (request()->blood_group == 'AB-ve') ? 'selected' : '' }} value="AB-ve">AB-ve</option>
            </select>
            @if($errors->get('blood_group'))
            @foreach($errors->get('blood_group') as $err)
            <p class="text-danger">{{ $err }}</p>
            @endforeach
            @endif
        </div>

        <div class="col-12 col-xl-3 col-md-6">
            <div class="form-floating">
                <input type="text" class="form-control" id="aadhar_number" name="aadhar_number" value="{{ request()->aadhar_number }}">
                <label for="aadhar_number">Aadhar Number</label>
            </div>
            @if($errors->get('aadhar_number'))
            @foreach($errors->get('aadhar_number') as $err)
            <p class="text-danger">{{ $err }}</p>
            @endforeach
            @endif
        </div>

        <div class="col-12 col-xl-3 col-md-6">
            <div class="form-floating">
                <input type="text" class="form-control" id="mother_tongue" name="mother_tongue" value="{{ request()->mother_tongue }}">
                <label for="mother_tongue">Mother Tongue</label>
            </div>
            @if($errors->get('mother_tongue'))
            @foreach($errors->get('mother_tongue') as $err)
            <p class="text-danger">{{ $err }}</p>
            @endforeach
            @endif
        </div>

        <div class="col-12 col-xl-3 col-md-6">
            <div class="form-floating">
                <input type="date" class="form-control" id="date_of_birth" name="date_of_birth" value="{{ request()->date_of_birth }}">
                <label for="date_of_birth">Date of Birth</label>
            </div>
            @if($errors->get('date_of_birth'))
            @foreach($errors->get('date_of_birth') as $err)
            {{ $err }}
            @endforeach
            @endif
        </div>

        <div class="col-12 col-xl-3 col-md-6">
            <div class="form-floating">
                <input type="text" class="form-control" id="birth_city" name="birth_city" value="{{ request()->birth_city }}">
                <label for="birth_city">Birth City</label>
            </div>
            @if($errors->get('birth_city'))
            @foreach($errors->get('birth_city') as $err)
            <p class="text-danger">{{ $err }}</p>
            @endforeach
            @endif
        </div>

        <div class="col-12 col-xl-6 col-md-6">
            <div class="form-floating">
                <input type="text" class="form-control" id="birth_district" name="birth_district" value="{{ request()->birth_district }}">
                <label for="birth_district">Birth District</label>
            </div>
            @if($errors->get('birth_district'))
            @foreach($errors->get('birth_district') as $err)
            <p class="text-danger">{{ $err }}</p>
            @endforeach
            @endif
        </div>

        <div class="col-12 col-xl-6 col-md-6">
            <div class="form-floating">
                <input type="text" class="form-control" id="birth_state" name="birth_state" value="{{ request()->birth_state }}">
                <label for="birth_state">Birth State</label>
            </div>
            @if($errors->get('birth_state'))
            @foreach($errors->get('birth_state') as $err)
            <p class="text-danger">{{ $err }}</p>
            @endforeach
            @endif
        </div>

        <div class="col-12 col-xl-3 col-md-6">
            <div class="form-floating">
                <input type="text" class="form-control" id="religion" name="religion" value="{{ request()->religion }}">
                <label for="religion">Religion</label>
            </div>
            @if($errors->get('religion'))
            @foreach($errors->get('religion') as $err)
            <p class="text-danger">{{ $err }}</p>
            @endforeach
            @endif
        </div>

        <div class="col-12 col-xl-3 col-md-6">
            <div class="form-floating">
                <input type="text" class="form-control" id="caste" name="caste" value="{{ request()->caste }}">
                <label for="caste">Caste</label>
            </div>
            @if($errors->get('caste'))
            @foreach($errors->get('caste') as $err)
            {{ $err }}
            @endforeach
            @endif
        </div>

        <div class="col-12 col-xl-3 col-md-6">
            <div class="form-floating">
                <input type="text" class="form-control" id="sub_caste" name="sub_caste" value="{{ request()->sub_caste }}">
                <label for="sub_caste">Sub Caste</label>
            </div>
            @if($errors->get('sub_caste'))
            @foreach($errors->get('sub_caste') as $err)
            {{ $err }}
            @endforeach
            @endif
        </div>

        <div class="col-12 col-xl-3 col-md-6">
            <div class="form-floating">
                <input type="text" class="form-control" id="native_place" name="native_place" value="{{ request()->native_place }}">
                <label for="native_place">Native Place</label>
            </div>
            @if($errors->get('native_place'))
            @foreach($errors->get('native_place') as $err)
            <p class="text-danger">{{ $err }}</p>
            @endforeach
            @endif
        </div>


    </div>
</div>