

<div class="container shadow border mb-5">
    <div class="row">
        <div class="col-12 bg-dark text-light">
            <h1 class="text-center">
                Review Application
            </h1>
        </div>
   
        <div class="col-12 text-center pt-5">
            <p class="fs-4 fw-bolder p-0 m-0">Coco Preschool</p>
            <p class="fs-5 m-0 p-0">Ambernath</p>
            <p class="fs-6 mb-1">Address : Sarvodaya Nagar, Jambhul Phata, Ambernath(w), Thane Maharashtra 421505</p>
            <hr>
        </div>
    </div>

    <div class="row">
       <h4>My ward wants {{session('admission_for')}} admission for grade {{session('grade_id')}}. </h4> 
        <h3 class="fw-bold mt-5 mb-3">Personal Details:</h3>
        <div class="col-12">
            <p class="fs-5"><span class="fw-bold">Student Full Name : </span><span>
                {{session('students_name')}} {{session('fathers_name')}} {{session('surname')}} {{session('mothers_name')}}</span> </p>
        </div>
        <div class="col-12 col-md-6">
            <p class="fs-5"><span class="fw-bold"> Gender :</span><span>  {{session('gender')}}</span> </p>
        </div>
        <div class="col-12 col-md-6">
            <p class="fs-5"><span class="fw-bold"> Blood group : </span><span> {{session('blood_group')}} </span> </p>
        </div>
        <div class="col-12 col-md-6">
            <p class="fs-5"><span class="fw-bold"> Aadhar Number : </span><span> {{session('aadhar_number')}} </span> </p>
        </div>
        <div class="col-12 col-md-6">
            <p class="fs-5"><span class="fw-bold"> Mother tongue : </span><span> {{session('mother_tongue')}} </span> </p>
        </div>
        <div class="col-12 col-md-6">
            <p class="fs-5"><span class="fw-bold"> Date of Birth : </span><span> {{session('date_of_birth')}} </span> </p>
        </div>
        <div class="col-12 col-md-6">
            <p class="fs-5"><span class="fw-bold"> Birth City : </span><span> {{session('birth_city')}} </span> </p>
        </div>
        <div class="col-12 col-md-6">
            <p class="fs-5"><span class="fw-bold"> Birth District : </span><span> {{session('birth_district')}} </span> </p>
        </div>
        <div class="col-12 col-md-6">
           <p class="fs-5"><span class="fw-bold">Birth State : </span><span> {{session('birth_state')}}  </span> </p>  
        </div>
        <div class="col-12 col-md-6">
             <p class="fs-5"><span class="fw-bold"> Religion : </span><span> {{session('religion')}} </span> </p>
        </div>
        <div class="col-12 col-md-6">
             <p class="fs-5"><span class="fw-bold"> Caste : </span><span> {{session('caste')}} </span> </p>
        </div>
        <div class="col-12 col-md-6">
             <p class="fs-5"><span class="fw-bold"> Sub caste : </span><span> {{session('sub_caste')}} </span> </p>
        </div>
        <div class="col-12 col-md-6">
             <p class="fs-5"><span class="fw-bold"> Native place : </span><span> {{session('native_place')}} </span> </p>
        </div>  
    </div>

    <div class="row">
        <h3 class="fw-bold">Contact Details:</h3>
        <div class="col-12 mt-3">
            <p class="fs-5"><span class="fw-bold">   Address :</span><span>  {{session('address')}}</span> </p>
        </div>
        <div class="col-12 col-md-6 col-md-4">
            <p class="fs-5"><span class="fw-bold"> City : </span><span> {{session('city')}} </span> </p>
        </div>
        <div class="col-12 col-md-6">
            <p class="fs-5"><span class="fw-bold">  State : </span><span> {{session('state')}}</span> </p>
        </div>
        <div class="col-12 col-md-6">
            <p class="fs-5"><span class="fw-bold"> Country :  </span><span> {{session('country')}} </span> </p >
        </div>
        <div class="col-12 col-md-6">
            <p class="fs-5"><span class="fw-bold">  Pincode :   </span><span> {{session('pincode')}} </span> </p>
        </div>
        <div class="col-12 col-xl-12 col-md-8">
            <p class="fs-5"><span class="fw-bold"> Primary Contact Number : </span><span> {{session('primary_contact_number')}} </span> </p>
        </div>
    </div>

    <div class="row">
        <h3 class="fw-bold">Parent/Guardian Details:</h3>
        <h5>* I am {{session('parentguardian')}}</h5>
        <!-- <h5>* Single Parent? {{session('singleparent')}}</h5>   -->
        
        @if(session('parentguardian')=='Parent')
        <h5 class="fw-bold mt-3 mb-3">Mother's Details:</h5>

        <div class="col-12 col-md-6">
           <p class="fs-5"><span class="fw-bold"> Mother's Name:</span><span> {{session('mothersname')}}</span> </p>
        </div>
        <div class="col-12 col-md-6">
            <p class="fs-5"><span class="fw-bold"> Age :</span><span>{{session('mothersage')}} </span></p>
        </div>
        <div class="col-12 col-md-6">
            <p class="fs-5"><span class="fw-bold"> Nationality :</span><span> {{session('mothersnationality')}}</span> </p>
        </div>
        <div class="col-12 col-md-6">
            <p class="fs-5"><span class="fw-bold"> Religion :</span><span> {{session('mothersreligion')}}</span> </p>
        </div>
        <div class="col-12 col-md-6">
            <p class="fs-5"><span class="fw-bold"> Qualification :</span><span> {{session('mothersqualification')}}</span></p>
        </div>
        <div class="col-12 col-md-6">
            <p class="fs-5"><span class="fw-bold"> School Studied In :</span><span> {{session('mothersschool_name')}}</span> </p>
        </div>
        <div class="col-12 col-md-6">
            <p class="fs-5"><span class="fw-bold"> College Studied In :</span><span> {{session('motherscollege_name')}}</span> </p>
        </div>
        <div class="col-12 col-md-6">
            <p class="fs-5"><span class="fw-bold"> Profession :</span><span> {{session('mothersprofession')}}</span> </p>
        </div>
        <div class="col-12 col-md-6">
            <p class="fs-5"><span class="fw-bold"> Office Address :</span><span> {{session('mothersoffice_address')}}</span> </p>
        </div>
        <div class="col-12 col-md-6">
            <p class="fs-5"><span class="fw-bold"> Contact Number:</span><span> {{session('motherscontact_number')}}</span></p>
        </div>
       
    
        <div class="row">
           <h5 class="fw-bolder mt-3">Father's Details:</h5>
           <div class="col-12 col-md-6">
            <p class="fs-5"> <span class="fw-bold">Father's Name :</span><span>{{session('fathersname')}}</span></p>
           </div>
           <div class="col-12 col-md-6">
           <p class="fs-5"> <span class="fw-bold">Age :</span><span> {{session('fathersage')}}</span></p></p>
           </div>
           <div class="col-12 col-md-6">
           <p class="fs-5">  <span class="fw-bold">Nationality :</span><span> {{session('fathersnationality')}}</span></p>
           </div>
           <div class="col-12 col-md-6">
           <p class="fs-5">  <span class="fw-bold">Religion :</span><span> {{session('fathersreligion')}}</span></p>
           </div>
           <div class="col-12 col-md-6">
           <p class="fs-5">  <span class="fw-bold">Qualification :</span><span> {{session('fathersqualification')}}</span></p>
           </div>
           <div class="col-12 col-md-6">
           <p class="fs-5">  <span class="fw-bold">School Studied In :</span><span> {{session('fathersschool_name')}}</span></p>
           </div>
           <div class="col-12 col-md-6">
           <p class="fs-5">  <span class="fw-bold">College Studied In :</span><span> {{session('fatherscollege_name')}} </span></p>
           </div>
           <div class="col-12 col-md-6">
           <p class="fs-5">  <span class="fw-bold">Profession :</span><span> {{session('fathersprofession')}} </span></p>
           </div>
           <div class="col-12 col-md-6">
           <p class="fs-5">  <span class="fw-bold">Office Address :</span><span> {{session('fathersoffice_address')}} </span></p>
           </div>
           <div class="col-12 col-md-6">
           <p class="fs-5"> <span class="fw-bold"> Contact Number :</span><span> {{session('fatherscontact_number')}} </span></p>
           </div>
        </div>
        @endif

       <div class="row">
           <h5 class="fw-bolder mt-3">Guardian's Details: (If any)</h5>
           <h6 class="display-none">{{ $guar= session('guardiansname')}}</h6>

           @if($guar=='' || $guar=='null')
               <div class="col-12 col-xl-3 col-md-4">
                    <h5>-</h5>
               </div>
           @else
               <div class="col-12 col-md-6">
                   <p class="fs-5"> <span class="fw-bold">Guardian's Name:</span><span> {{session('guardiansname')}} </span></p>
               </div>
               <div class="col-12 col-md-6">
                   <p class="fs-5"> <span class="fw-bold">Age:</span><span>{{session('guardiansage')}} </span></p>
               </div>
               <div class="col-12 col-md-6">
                   <p class="fs-5"> <span class="fw-bold">Nationality:</span><span> {{session('guardiansnationality')}} </span></p>
               </div>
               <div class="col-12 col-md-6">
                   <p class="fs-5"> <span class="fw-bold">Religion:</span><span> {{session('guardiansreligion')}} </span></p>
               </div>
               <div class="col-12 col-md-6">
                   <p class="fs-5"> <span class="fw-bold">Qualification:</span><span> {{session('guardiansqualification')}} </span></p>
               </div>
               <div class="col-12 col-md-6">
                   <p class="fs-5"> <span class="fw-bold">School Studied In :</span><span> {{session('guardiansschool_name')}} </span></p>
               </div>
               <div class="col-12 col-md-6">
                   <p class="fs-5"> <span class="fw-bold">School Studied In :</span><span> {{session('guardianscollege_name')}} </span></p>
               </div>
               <div class="col-12 col-md-6">
                    <p class="fs-5"> <span class="fw-bold">Profession :</span><span> {{session('guardiansprofession')}} </span></p>
               </div> 
         
               <div class="col-12 col-md-6">
                    <p class="fs-5"> <span class="fw-bold">Office Address :</span><span> {{session('guardiansoffice_address')}} </span></p>
               </div>  
               <div class="col-12 col-md-6">
                    <p class="fs-5"> <span class="fw-bold">Contact number :</span><span> {{session('guardianscontact_number')}} </span></p>
               </div>

           @endif
       </div>
    </div>

    
    <div class="row">
        <h5 class="fw-bolder mt-3 mb-3">Sibling Details:</h5>
       <h5 class="fw-bold">Number of sisters - {{session('no_of_sisters')}}</h5>
        @if(session('no_of_sisters')>0)
            @for($i = 0; $i < session('no_of_sisters'); $i++)
                <div class="col-12 col-md-6">
                <!-- <p class="fs-5"><span class="fw-bold"> Religion :</span><span> {{session('mothersreligion')}}</span> </p> -->
                    <p class="fs-5"><span class="fw-bold"> Sister's Name : </span><span> {{session()->get('sistername')[$i]}} </span> </p>
                </div>
                <div class="col-12 col-md-6">
                    <p class="fs-5"><span class="fw-bold"> Age : </span><span> {{session()->get('sisterage')[$i]}} </span> </p>
                </div>
                <div class="col-12 col-md-6">
                    <p class="fs-5"><span class="fw-bold"> School/College : </span><span> {{session()->get('sisterschool_college')[$i]}} </span></p>
                </div>
                <div class="col-12 col-md-6">
                    <p class="fs-5"><span class="fw-bold"> Grade : </span><span> {{session()->get('sistergrade')[$i]}} </span> </p>
                </div>
            @endfor
        @endif
    </div>
    
    <div class="row">
        <h5 class="fw-bold mt-3">
        Number of brothers - {{session('no_of_brothers')}}
        </h5>
            <!-- <p class="fs-5"><span class="fw-bold">Number of brothers - </span><span> {{session('no_of_brothers')}} </span></p> -->
        
            @if(session('no_of_brothers')>0)
                @for($i = 0; $i < session('no_of_brothers'); $i++)
                <div class="col-12 col-md-6">
                    <p class="fs-5"><span class="fw-bold">Brother's Name : </span><span> {{session()->get('brothername')[$i]}} </span></p>
                </div>
                <div class="col-12 col-md-6">
                    <p class="fs-5"><span class="fw-bold">Age :</span><span>{{session()->get('brotherage')[$i]}}</span></p>
                </div>
                <div class="col-12 col-md-6">
                    <p class="fs-5"><span class="fw-bold">School/College : </span><span>{{session()->get('brotherschool_college')[$i]}} </span></p>
                </div>
                <div class="col-12 col-md-6">
                    <p class="fs-5"><span class="fw-bold">Grade:</span><span> {{session()->get('brothergrade')[$i]}} </span></p>
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
    
    <!-- <div class=" container mb-5 mt-3">
        <div class="row text-center justify-content-center g-3">
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
    </div> -->

    
        <div class="row g-3 mt-3">
            <h5 class="fw-bolder">Uploaded Documents: </h5>
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