<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Program - Coco Preschool</title>
    @vite(['resources/sass/app.scss', 'resources/js/app.js'])
</head>
<body>

@include('layouts.web.header')


<div class="container-fluid">
    <!-- Applications table -->
    <div class="container mt-4 mb-5 border">
       <div class="row g-4 mb-5">

            <div class="col-12">
                <select class="form-select" id="admission_for" aria-label="Floating label select example" name="admission_for">
                        <option value="admission_for">Admission For</option>
                        <option value="New">New Admission</option>
                        <option value="Re-admission">Re-admission</option>
                    </select>
            </div>
        
            <div class="col-12 col-xl-3">
                    <div class="form-floating">
                        <input type="text" class="form-control" id="surname" name="surname" value="{{ old('surname') }}">
                        <label for="surname">Surname</label>
                    </div>
            </div>

            <div class="col-12 col-xl-3">
                    <div class="form-floating">
                        <input type="text" class="form-control" id="students_name" name="students_name" value="{{ old('students_name') }}">
                        <label for="students_name">Student Name</label>
                    </div>
            </div>

            <div class="col-12 col-xl-3">
                    <div class="form-floating">
                        <input type="text" class="form-control" id="fathers_name" name="fathers_name" value="{{ old('fathers_name') }}">
                        <label for="fathers_name">Father's Name</label>
                    </div>
            </div>

            <div class="col-12 col-xl-3">
                    <div class="form-floating">
                        <input type="text" class="form-control" id="mothers_name" name="mothers_name" value="{{ old('mothers_name') }}">
                        <label for="mothers_name">Mother's Name</label>
                    </div>
            </div>

            <div class="col-12 col-xl-3">
                    <div class="form-floating">
                        <input type="date" class="form-control" id="date_of_birth" name="date_of_birth" value="{{ old('date_of_birth') }}">
                        <label for="date_of_birth">Date of Birth</label>
                    </div>
            </div>

            <div class="col-12 col-xl-3">
                    <div class="form-floating">
                        <input type="text" class="form-control" id="birth_city" name="birth_city" value="{{ old('birth_city') }}">
                        <label for="birth_city">Birth City</label>
                    </div>
            </div>

            <div class="col-12 col-xl-3">
                    <div class="form-floating">
                        <input type="text" class="form-control" id="birth_district" name="birth_district" value="{{ old('birth_district') }}">
                        <label for="birth_district">Birth District</label>
                    </div>
            </div>

            <div class="col-12 col-xl-3">
                    <div class="form-floating">
                        <input type="text" class="form-control" id="birth_state" name="birth_state" value="{{ old('birth_state') }}">
                        <label for="birth_state">Birth State</label>
                    </div>
            </div>

            <div class="col-12 col-xl-3">
                    <div class="form-floating">
                        <input type="text" class="form-control" id="religion" name="religion" value="{{ old('religion') }}">
                        <label for="religion">Religion</label>
                    </div>
            </div>

            <div class="col-12 col-xl-3">
                    <div class="form-floating">
                        <input type="text" class="form-control" id="caste" name="caste" value="{{ old('caste') }}">
                        <label for="caste">Caste</label>
                    </div>
            </div>

            <div class="col-12 col-xl-3">
                    <div class="form-floating">
                        <input type="text" class="form-control" id="sub_caste" name="sub_caste" value="{{ old('sub_caste') }}">
                        <label for="sub_caste">Sub Caste</label>
                    </div>
            </div>

            <div class="col-12 col-xl-3">
                <select class="form-select" id="gender" aria-label="Floating label select example" name="gender" value="{{ old('gender') }}">
                    <option value="">Select Gender</option>
                    <option value="Male">Male</option>
                    <option value="Female">Female</option>
                    <option value="Other">Other</option>
                </select>
            </div>

            <div class="col-12 col-xl-3">
                    <div class="form-floating">
                        <input type="text" class="form-control" id="aadhar_number" name="aadhar_number" value="{{ old('aadhar_number') }}">
                        <label for="aadhar_number">Aadhar Number</label>
                    </div>
            </div>

            <div class="col-12 col-xl-3">
                    <div class="form-floating">
                        <input type="text" class="form-control" id="mother_tongue" name="mother_tongue" value="{{ old('mother_tongue') }}">
                        <label for="mother_tongue">Mother Tongue</label>
                    </div>
            </div>

            <div class="col-12 col-xl-3">
                <div class="form-floating">
                    <input type="text" class="form-control" id="native_place" name="native_place" value="{{ old('native_place') }}">
                    <label for="native_place">Native Place</label>
                </div>
            </div>

            <div class="col-12 col-xl-3">
                <select class="form-select" id="blood_group" aria-label="Floating label select example" name="blood_group" value="{{ old('blood_group') }}">
                    <option value="">Select Blood Group</option>
                    <option value="O+ve">O+ve</option>
                    <option value="O-ve">O-ve</option>
                    <option value="A+ve">A+ve</option>
                    <option value="A-ve">A-ve</option>
                    <option value="B+ve">B+ve</option>
                    <option value="B-ve">B-ve</option>
                    <option value="AB+ve">AB+ve</option>
                    <option value="AB-ve">AB-ve</option>
                </select>
            </div>

            <div class="col-12 col-xl-3">
                    <div class="form-floating">
                        <input type="text" class="form-control" id="primary_contact_number" name="primary_contact_number" value="{{ old('primary_contact_number') }}">
                        <label for="primary_contact_number">Primary Contact Number</label>
                    </div>
            </div>

            <div class="col-12 col-xl-3">
                    <div class="form-floating">
                        <input type="text" class="form-control" id="address" name="address" value="{{ old('address') }}">
                        <label for="address">Address</label>
                    </div>
            </div>

            <div class="col-12 col-xl-3">
                    <div class="form-floating">
                        <input type="text" class="form-control" id="city" name="city" value="{{ old('city') }}">
                        <label for="city">City</label>
                    </div>
            </div>

            <div class="col-12 col-xl-3">
                    <div class="form-floating">
                        <input type="text" class="form-control" id="state" name="state" value="{{ old('state') }}">
                        <label for="state">State</label>
                    </div>
            </div>

            <div class="col-12 col-xl-3">
                    <div class="form-floating">
                        <input type="text" class="form-control" id="country" name="country" value="{{ old('country') }}">
                        <label for="country">Country</label>
                    </div>
            </div>

            <div class="col-12 col-xl-3">
                    <div class="form-floating">
                        <input type="text" class="form-control" id="pincode" name="pincode" value="{{ old('pincode') }}">
                        <label for="pincode">Pincode</label>
                    </div>
            </div>

            <div class="col-12 col-xl-3">
                    <div class="form-floating">
                        <input type="text" class="form-control" id="no_of_brothers" name="no_of_brothers" value="{{ old('no_of_brothers') }}">
                        <label for="no_of_brothers">Number of Brothers</label>
                    </div>
            </div>

            <div class="col-12 col-xl-3">
                    <div class="form-floating">
                        <input type="text" class="form-control" id="no_of_sisters" name="no_of_sisters" value="{{ old('no_of_sisters') }}">
                        <label for="no_of_sisters">Number of Sisters</label>
                    </div>
            </div>

        </div>
       </div>
    </div>


    <!-- Application parents -->
    <div class="container mt-4 mb-5 border">
        <div class="row g-4 mb-5">

            <div class="col-12 col-xl-3">
                <select class="form-select" id="relation" aria-label="Floating label select example" name="relation">
                    <option value="">Relation with Student</option>
                    <option value="Father">Father</option>
                    <option value="Mother">Mother</option>
                    <option value="Guardian">Guardian</option>
                </select>
            </div>

            <div class="col-12 col-xl-3">
                    <div class="form-floating">
                        <input type="text" class="form-control" id="name" name="name" value="{{ old('name') }}">
                        <label for="name">Father's Name</label>
                    </div>
            </div>

            <div class="col-12 col-xl-3">
                    <div class="form-floating">
                        <input type="text" class="form-control" id="age" name="age" value="{{ old('age') }}">
                        <label for="age">Age</label>
                    </div>
            </div>

            <div class="col-12 col-xl-3">
                    <div class="form-floating">
                        <input type="text" class="form-control" id="nationality" name="nationality" value="{{ old('nationality') }}">
                        <label for="nationality">Nationality</label>
                    </div>
            </div>

            <div class="col-12 col-xl-3">
                    <div class="form-floating">
                        <input type="text" class="form-control" id="religion" name="religion" value="{{ old('religion') }}">
                        <label for="religion">Religion</label>
                    </div>
            </div>

            <div class="col-12 col-xl-3">
                    <div class="form-floating">
                        <input type="text" class="form-control" id="qualification" name="qualification" value="{{ old('qualification') }}">
                        <label for="qualification">Qualification</label>
                    </div>
            </div>

            <div class="col-12 col-xl-3">
                    <div class="form-floating">
                        <input type="text" class="form-control" id="school_name" name="school_name" value="{{ old('school_name') }}">
                        <label for="school_name">School Studied In</label>
                    </div>
            </div>

            <div class="col-12 col-xl-3">
                    <div class="form-floating">
                        <input type="text" class="form-control" id="college_name" name="college_name" value="{{ old('college_name') }}">
                        <label for="college_name">College Studied In</label>
                    </div>
            </div>

            <div class="col-12 col-xl-3">
                    <div class="form-floating">
                        <input type="text" class="form-control" id="profession" name="profession" value="{{ old('profession') }}">
                        <label for="profession">Profession</label>
                    </div>
            </div>

            <div class="col-12 col-xl-3">
                    <div class="form-floating">
                        <input type="text" class="form-control" id="office_address" name="office_address" value="{{ old('office_address') }}">
                        <label for="office_address">Office Address</label>
                    </div>
            </div>

            <div class="col-12 col-xl-3">
                    <div class="form-floating">
                        <input type="text" class="form-control" id="contact_number" name="contact_number" value="{{ old('contact_number') }}">
                        <label for="contact_number">Contact Number</label>
                    </div>
            </div>

        </div>
    </div>


     <!-- Application sibling table -->
    <div class="container mt-4 mb-5 border">
        <div class="row g-4 mb-5">

            <div class="col-12 col-xl-3">
                <select class="form-select" id="relation" aria-label="Floating label select example" name="relation">
                    <option value="">Relation with Student</option>
                    <option value="Brother">Brother</option>
                    <option value="Sister">Sister</option>
                </select>
            </div>

            <div class="col-12 col-xl-3">
                    <div class="form-floating">
                        <input type="text" class="form-control" id="name" name="name" value="{{ old('name') }}">
                        <label for="name">Name</label>
                    </div>
            </div>

            <div class="col-12 col-xl-3">
                    <div class="form-floating">
                        <input type="text" class="form-control" id="age" name="age" value="{{ old('age') }}">
                        <label for="age">Age</label>
                    </div>
            </div>

            <div class="col-12 col-xl-3">
                    <div class="form-floating">
                        <input type="text" class="form-control" id="school_college" name="school_college" value="{{ old('school_college') }}">
                        <label for="school_college">School/College Name</label>
                    </div>
            </div>

            <div class="col-12 col-xl-3">
                    <div class="form-floating">
                        <input type="text" class="form-control" id="grade" name="grade" value="{{ old('grade') }}">
                        <label for="grade">Grade</label>
                    </div>
            </div>

            <div class="col-12 col-xl-3">
                    <div class="form-floating">
                        <input type="text" class="form-control" id="grade" name="grade" value="{{ old('grade') }}">
                        <label for="grade">Grade</label>
                    </div>
            </div>

            <div class="col-12 col-xl-3">
                    <div class="form-floating">
                        <input type="text" class="form-control" id="grade" name="grade" value="{{ old('grade') }}">
                        <label for="grade">Grade</label>
                    </div>
            </div>
            

        </div>
    </div>
</div>

@include('layouts.web.footer')
</body>
</html>
