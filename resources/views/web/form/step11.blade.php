<div class="mb-5">
    <div class="row g-3 shadow py-3">
        <p class="fs-3">Documents Uploaded</p>
        @foreach($docs as $i => $doc)
        <div class="col-4">
            {{ $doc->document->document }}

            <br>
            <img src="{{ '/storage/'.request()->paths[$i] }}" style="width:100px;">
        </div>
        @endforeach

    </div>
</div>

<div class="container bg-light border mb-5">
    <div class="row mt-3">
        <div class="col-12">
            <h1 class="text-center">
                Review Application
            </h1>
        </div>
   
        <br><br>
        <!-- <div class="col-12"></div> -->
        <div class="col-12 text-center">
            <br><br>
            <h3>Holly Cross High School</h3>
            <h4>Ambernath</h4>
            
            <p class="text-center">Center aligned text on all aligned text on a viewport sizes.</p>
            <hr>
        </div>
    </div>
    <div class="row">
       <h4>I want {{session('admission_for')}} admission for {{session('grade_id')}} my ward. </h4> 
        <h3 class="fw-bold mt-5">Personal details:</h3>
        <div class="col-12 mt-3 mb-3">
            <h5>
            Student Full Name : 
            {{session('surname')}} {{session('students_name')}} {{session('guardians_name')}} {{session('mothers_name')}} 
            </h5>
        </div>
        <div class="col-12 col-xl-3 col-md-4 mb-3">
            <h5> Gender: {{session('gender')}} </h5>
        </div>
        <div class="col-12 col-xl-3 col-md-4 mb-3">
            <h5> Blood group: {{session('blood_group')}} </h5>
        </div>
        <div class="col-12 col-xl-3 col-md-4 mb-3">
            <h5> Aadhar Number: {{session('aadhar_number')}} </h5>
        </div>
        <div class="col-12 col-xl-3 col-md-4 mb-3">
            <h5> Mothertongue: {{session('mother_tongue')}} </h5>
        </div>
        <div class="col-12 col-xl-3 col-md-4 mb-3">
            <h5> Date of Birth: {{session('date_of_birth')}} </h5>
        </div>
        <div class="col-12 col-xl-3 col-md-4 mb-3">
            <h5> Birth City: {{session('birth_city')}} </h5>
        </div>
        <div class="col-12 col-xl-3 col-md-4 mb-3">
            <h5> Birth District: {{session('birth_district')}} </h5>
        </div>
        <div class="col-12 col-xl-3 col-md-4 mb-3">
           <h5>Birth State: {{session('birth_state')}}  </h5>  
        </div>
        <div class="col-12 col-xl-3 col-md-4 mb-3">
             <h5> Religion: {{session('religion')}} </h5>
        </div>
        <div class="col-12 col-xl-3 col-md-4 mb-3">
             <h5> Caste: {{session('caste')}} </h5>
        </div>
        <div class="col-12 col-xl-3 col-md-4 mb-3">
             <h5> Sub caste: {{session('sub_caste')}} </h5>
        </div>
        <div class="col-12 col-xl-3 col-md-4 mb-3">
             <h5> Native place: {{session('native_place')}} </h5>
        </div>  
    </div>
    <div class="row">
        <h3 class="fw-bold">Contact details:</h3>
        <div class="col-12 mt-3 mb-3">
            <h5>    Address: {{session('address')}} </h5>
        </div>
        <div class="col-12 col-xl-3 col-md-4 mb-3">
            <h5> City: {{session('city')}} </h5>
        </div>
        <div class="col-12 col-xl-3 mb-3">
            <h5> State: {{session('state')}} </h5>
        </div>
        <div class="col-12 col-xl-3 mb-3">
            <h5> Country: {{session('country')}} </h5>
        </div>
        <div class="col-12 col-xl-3 mb-3">
            <h5> Pincode: {{session('pincode')}} </h5>
        </div>
        <div class="col-12 col-xl-12 col-md-8 mb-3">
            <h5> Primary Contact Number: {{session('primary_contact_number')}} </h5>
        </div>
    </div>
    <div class="row">
        <h3 class="fw-bold">Parent/Guardian Details:</h3>
        <h5>* I am {{session('parentguardian')}}</h5>
        <h5>* Single Parent? {{session('singleparent')}}</h5>
        <h5 class="fw-bolder mt-">Mother's Details:</h5>
        <div class="col-12 col-xl-3 col-md-4 mb-3">
           <h5> Mother's Name: {{session('mothersname')}} </h5>
        </div>
        <div class="col-12 col-xl-3 mb-3">
            <h5> Age: {{session('mothersage')}} </h5>
        </div>
        <div class="col-12 col-xl-3 mb-3">
            <h5> Nationality: {{session('mothersnationality')}} </h5>
        </div>
        <div class="col-12 col-xl-3 mb-3">
            <h5> Religion: {{session('mothersreligion')}} </h5>
        </div>
        <div class="col-12 col-xl-3 mb-3">
            <h5> Qualification: {{session('mothersqualification')}} </h5>
        </div>
        <div class="col-12 col-xl-3 mb-3">
            <h5> School Studied In : {{session('mothersschool_name')}} </h5>
        </div>
        <div class="col-12 col-xl-3 mb-3">
            <h5> College Studied In: {{session('motherscollege_name')}} </h5>
        </div>
        <div class="col-12 col-xl-3 mb-3">
            <h5> Profession: {{session('mothersprofession')}} </h5>
        </div>
        <div class="col-12 col-xl-3 mb-3">
            <h5> Contact Number: {{session('motherscontact_number')}} </h5>
        </div>

        <br>
        <h5 class="fw-bolder mt-">Father's Details:</h5>
        <div class="col-12 col-xl-3 col-md-4 mb-3">
           <h5> Father's Name: {{session('fathersname')}} </h5>
        </div>
        <div class="col-12 col-xl-3 mb-3">
            <h5> Age: {{session('fathersage')}} </h5>
        </div>
        <div class="col-12 col-xl-3 mb-3">
            <h5> Nationality: {{session('fathersnationality')}} </h5>
        </div>
        <div class="col-12 col-xl-3 mb-3">
            <h5> Religion: {{session('fathersreligion')}} </h5>
        </div>
        <div class="col-12 col-xl-3 mb-3">
            <h5> Qualification: {{session('fathersqualification')}} </h5>
        </div>
        <div class="col-12 col-xl-3 mb-3">
            <h5> School Studied In : {{session('fathersschool_name')}} </h5>
        </div>
        <div class="col-12 col-xl-3 mb-3">
            <h5> College Studied In: {{session('fatherscollege_name')}} </h5>
        </div>
        <div class="col-12 col-xl-3 mb-3">
            <h5> Profession: {{session('fathersprofession')}} </h5>
        </div>
        <div class="col-12 col-xl-3 mb-3">
            <h5> Contact Number: {{session('fatherscontact_number')}} </h5>
        </div>

        <br>
        <h5 class="fw-bolder mt-">guardian's Details:</h5>
        <div class="col-12 col-xl-3 col-md-4 mb-3">
           <h5> guardian's Name: {{session('guardiansname')}} </h5>
        </div>
        <div class="col-12 col-xl-3 mb-3">
            <h5> Age: {{session('guardiansage')}} </h5>
        </div>
        <div class="col-12 col-xl-3 mb-3">
            <h5> Nationality: {{session('guardiansnationality')}} </h5>
        </div>
        <div class="col-12 col-xl-3 mb-3">
            <h5> Religion: {{session('guardiansreligion')}} </h5>
        </div>
        <div class="col-12 col-xl-3 mb-3">
            <h5> Qualification: {{session('guardiansqualification')}} </h5>
        </div>
        <div class="col-12 col-xl-3 mb-3">
            <h5> School Studied In : {{session('guardiansschool_name')}} </h5>
        </div>
        <div class="col-12 col-xl-3 mb-3">
            <h5> College Studied In: {{session('guardianscollege_name')}} </h5>
        </div>
        <div class="col-12 col-xl-3 mb-3">
            <h5> Profession: {{session('guardiansprofession')}} </h5>
        </div>
        <div class="col-12 col-xl-3 mb-3">
            <h5> Contact Number: {{session('guardianscontact_number')}} </h5>
        </div>
    </div>



    
    <div class="row">
        <h3 class="fw-bold">Sibling details:</h3>
        <div class="col-12 mt-3 mb-3">
            <h5>    No of brothers: {{session('no_of_brothers')}} </h5>
        </div>
       
    </div>
</div>