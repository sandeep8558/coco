<div class=" container mb-5">
    <div class="row text-center justify-content-center g-3 shadow">
        <p class="fs-3">Uploaded Documents:</p>
        @foreach($docs as $i => $doc)
        <div class="" style="width:220px">
          <div class="image image-contain image-p">
             <img class="img-thumbnail" src="{{ '/storage/'.request()->paths[$i] }}">
          </div> 
            <h5 class="mt-2">{{ $doc->document->document }}  </h5>
        </div>
        @endforeach

    </div>
</div>

<div class="container shadow border mb-5">
    <div class="row">
        <div class="col-12 bg-dark text-light">
            <h1 class="text-center">
                Review Application
            </h1>
        </div>
   
        <div class="col-12 text-center pt-5 -mt-5">
            <h3>Holly Cross High School</h3>
            <h4>Ambernath</h4>
            
            <p class="text-center">Address: Center aligned text on all aligned text on a viewport sizes.</p>
            <h6 class="text-center">Address: Center aligned text on n a viewh6ort sizes.</h6>
            <hr>
        </div>
    </div>
    <div class="row">
       <h4>My ward wants {{session('admission_for')}} admission for grade {{session('grade_id')}}. </h4> 
        <h3 class="fw-bold mt-5 mb-3">Personal Details:</h3>
        <div class="col-12 col-md-8 col-xl-6 mb-3">
            <h5>
            Student Full Name : 
            {{session('surname')}} {{session('students_name')}} {{session('fathers_name')}} 
            </h5>
        </div>
        <div class="col-12 col-md-4 col-xl-6 mb-3">
            <h5>
            Mother's Name:  {{session('mothers_name')}} 
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
        <h3 class="fw-bold">Contact Details:</h3>
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
        <h5 class="fw-bolder mt-3">Mother's Details:</h5>
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
        <h5 class="fw-bolder mt-3">Father's Details:</h5>
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
        <h5 class="fw-bolder mt-3">Guardian's Details: (If any)</h5>
        <h6 class="display-none">{{ $guar= session('guardiansname')}}</h6>
        @if($guar=='')
            <div class="col-12 col-xl-3 col-md-4 mb-3">
                 <h5>No Guardian</h5>
            </div>
        @else
            <div class="col-12 col-xl-3 col-md-4 mb-3">
                <h5> Guardian's Name: {{session('guardiansname')}} </h5>
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
        @endif
    </div>

    
    <div class="row">
        <h3 class="fw-bold">Sibling details:</h3>
        <div class="col-12  mb-3">
            <h5>    No of brothers: {{session('no_of_brothers')}} </h5>
        </div>
        <div class="col-12  mb-3">
            <h5>    No of sisters: {{session('no_of_sisters')}} </h5>
        </div>
    </div>
    
    <div class="row">
            @if(session('no_of_brothers')>0)
                @for($i = 0; $i < session('no_of_brothers'); $i++)
                    <div class="col-12 col-md-3  mb-3">
                        <h5>    Brother's Name: {{session()->get('brothername')[$i]}} </h5>
                    </div>
                    <div class="col-12 col-md-3  mb-3">
                        <h5>    Age: {{session()->get('brotherage')[$i]}} </h5>
                    </div>
                    <div class="col-12 col-md-3  mb-3">
                        <h5>    School/College: {{session()->get('brotherschool_college')[$i]}} </h5>
                    </div>
                    <div class="col-12 col-md-3  mb-3">
                        <h5>    Grade: {{session()->get('brothergrade')[$i]}} </h5>
                    </div>
                @endfor
            @endif
    </div>

    <!-- <div class="row">
        <h3 class="fw-bold">Attached Documents:</h3>    
                @foreach($docs as $i => $doc)
                <div class="col-4">
                    <img class="img-thumbnail" src="{{ '/storage/'.request()->paths[$i] }}" style="width:100px;">
                    <h5>{{ $doc->document->document }}  </h5>
                </div>
                @endforeach
    </div> -->

</div>