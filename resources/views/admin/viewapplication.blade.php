@extends('layouts.admin')

@section('head')
<title>View Application</title>
@endsection

@section('content')
{{$app}}
<div class="container-fluid">
    <div class="container shadow">
        <div class="d-flex justify-content-between p-3">
            <div>
                <h3 class="fw-bold">Coco Preschool</h3>
                <p>Sarvodaya Nagar, Jambhul Phata, Ambernath West, Thane 421505</p>
                <p>Student Registeration Form For {{$app->grade->grade}} </p>
              
            </div>
            <div>
                <div class="">
                <img src="/img/8.jpg" alt="image" height="150px" width="120px">
                </div>
                
            </div>
        </div>
       
        <div class="row">
            <div class="col-12">
                <hr>
                <p class="fs-4 fw-bold">Personal Details:</p>
            </div>
            <div class="col-12">
                <p class="fs-5"><span class="fw-bold">Student Full Name : </span><span>
                    {{$app->students_name}} {{$app->fathers_name}} {{$app->surname}} {{$app->mothers_name}}  </span> </p>
            </div>
            <div class="col-sm-12 col-md-6">
                <p class="fs-5"><span class="fw-bold">Date of Birth : </span><span> {{$app->date_of_birth}} </span> </p>
            </div>
            <div class="col-sm-12 col-md-6">
                <p class="fs-5"><span class="fw-bold">Blood Group : </span><span> {{$app->blood_group}} </span></p>
            </div>
            <div class="col-sm-12 col-md-6">
                <p class="fs-5"><span class="fw-bold">Birth City : </span><span> {{$app->birth_city}} </span> </p>
            </div>
            <div class="col-sm-12 col-md-6">
                <p class="fs-5"><span class="fw-bold">Birth District : </span><span> {{$app->birth_district}}  </span> </p>
            </div>
            <div class="col-sm-12 col-md-6">
                <p class="fs-5"><span class="fw-bold">Birth State : </span><span> {{$app->birth_state}} </span> </p>
            </div>
            <div class="col-sm-12 col-md-6">
                <p class="fs-5"><span class="fw-bold">Religion : </span><span> {{$app->religion}} </span> </p>
            </div>
            <div class="col-sm-12 col-md-6">
                <p class="fs-5"><span class="fw-bold">Caste : </span><span> {{$app->caste}}  </span> </p>
            </div>
            <div class="col-sm-12 col-md-6">
                <p class="fs-5"><span class="fw-bold">Sub Caste : </span><span> {{$app->sub_caste}} </span> </p>
            </div>
            <div class="col-sm-12 col-md-6">
                <p class="fs-5"><span class="fw-bold">Gender : </span> <span> {{$app->gender}} </span> </p>
            </div>
            <div class="col-sm-12 col-md-6">
                <p class="fs-5"><span class="fw-bold">Aadhar Number :</span><span> {{$app->aadhar_number}}</span></p>
            </div>
            <div class="col-sm-12 col-md-6">
                <p class="fs-5"><span class="fw-bold">Mother Tongue : </span><span> {{$app->mother_tongue}} </span></p>
            </div>
            <div class="col-sm-12 col-md-6">
                <p class="fs-5"><span class="fw-bold">Native Place : </span><span> {{$app->native_place}} </span></p>
            </div>

           <!-- contact details -->
            <div class="col-12">
                <p class="fs-4 fw-bold">Contact Details:</p>
            </div>
            <div class="col-12 col-md-6">
                <p class="fs-5"><span class="fw-bold">Contact Number :</span><span> {{$app->primary_contact_number}} </span></p>
            </div>
            <div class="col-12 col-md-6">
                <p class="fs-5"><span class="fw-bold">Email : </span><span> {{$app->user->email}}</span></p>
            </div>
            <div class="col-12">
                <p class="fs-5"><span class="fw-bold">Address : </span><span> {{$app->address}} </span></p>
            </div>
            <div class="col-12 col-md-6">
                <p class="fs-5"><span class="fw-bold">City : </span><span> {{$app->city}} </span></p>
            </div>
            <div class="col-12 col-md-6">
                <p class="fs-5"><span class="fw-bold">State : </span><span> {{$app->state}} </span></p>
            </div>
            <div class="col-12 col-md-6">
                <p class="fs-5"><span class="fw-bold">Country :</span><span> {{$app->country}}</span></p>
            </div>
            <div class="col-12 col-md-6">
                <p class="fs-5"><span class="fw-bold">Pincode : </span><span> {{$app->pincode}} </span></p>
            </div>

            <!-- sibling details -->
            <div class="col-12">
                <p class="fs-4 fw-bold">Sibling Details:</p>
            </div>
            <div class="col-sm-12 col-md-6">
                <p class="fs-5"><span class="fw-bold">No of Brothers : </span><span> {{$app->no_of_brothers}} </span></p>
            </div>
            <div class="col-sm-12 col-md-6">
                <p class="fs-5"><span class="fw-bold">No of Sisters : </span><span> {{$app->no_of_sisters}} </span></p>
            </div>
            <div class="col-12">
                <div class="row">
                    @foreach($app->application_siblings as $sib)
                        <div class="col-sm-12 col-md-6">
                            <p class="fs-5"><span class="fw-bold">Name : </span><span> {{$sib->name}}</span></p>
                        </div>  
                        <div class="col-sm-12 col-md-6">
                            <p class="fs-5"><span class="fw-bold">Relation : </span><span> {{$sib->relation}}</span></p>
                        </div> 
                        <div class="col-sm-12 col-md-6">
                            <p class="fs-5"><span class="fw-bold">Age : </span><span> {{$sib->age}} Years</span></p>
                        </div>  
                        <div class="col-sm-12 col-md-6">
                            <p class="fs-5"><span class="fw-bold">School/College : </span><span> {{$sib->school_college}}</span></p>
                        </div> 
                        <div class="col-sm-12 col-md-6">
                            <p class="fs-5"><span class="fw-bold">Grade : </span><span> {{$sib->grade}}</span></p>
                        </div>     
                    @endforeach
        
                </div>
            </div>

            <!-- parent/guardian details -->
            <div class="col-12">
                <p class="fs-4 fw-bold">Parent/Guardian Details:</p>
            </div>
            <div class="row">
                @foreach($app->application_parents as $par)
                <div class="col-sm-12 col-md-6">
                <p class="fs-5"><span class="fw-bold">{{$par->relation}}'s Name: </span><span> {{$par->name}} </span></p>
                </div>
                <div class="col-sm-12 col-md-6">
                <p class="fs-5"><span class="fw-bold">Age: </span><span> {{$par->age}} </span></p>
                </div>
                <div class="col-sm-12 col-md-6">
                <p class="fs-5"><span class="fw-bold">Nationality: </span><span> {{$par->nationality}} </span></p>
                </div>
                <div class="col-sm-12 col-md-6">
                <p class="fs-5"><span class="fw-bold">Religion: </span><span> {{$par->religion}} </span></p>
                </div>
                <div class="col-sm-12 col-md-6">
                <p class="fs-5"><span class="fw-bold">Qualification: </span><span> {{$par->qualification}} </span></p>
                </div>
                <div class="col-sm-12 col-md-6">
                <p class="fs-5"><span class="fw-bold">School name: </span><span> {{$par->school_name}} </span></p>
                </div>
                <div class="col-sm-12 col-md-6">
                <p class="fs-5"><span class="fw-bold">College name: </span><span> {{$par->college_name}} </span></p>
                </div>
                <div class="col-sm-12 col-md-6">
                <p class="fs-5"><span class="fw-bold">Profession: </span><span> {{$par->profession}} </span></p>
                </div>
                <div class="col-sm-12 col-md-6">
                <p class="fs-5"><span class="fw-bold">Office address: </span><span> {{$par->office_address}} </span></p>
                </div>
                <div class="col-sm-12 col-md-6">
                <p class="fs-5"><span class="fw-bold">Contact number: </span><span> {{$par->contact_number}} </span></p>
                </div>
                @endforeach
            </div>

            <!-- Payment details -->
            <div class="col-12">
                <p class="fs-4 fw-bold">Payment Details:</p>
            </div>
            <div class="col-sm-12 col-md-6">
                <p class="fs-5"><span class="fw-bold">Tracking Id : </span><span> {{$app->tracking_id}} </span></p>
            </div>
            <div class="col-sm-12 col-md-6">
                <p class="fs-5 "><span class="fw-bold">Bank Ref No : </span><span> {{$app->bank_ref_no}} </span></p>
            </div>  
            <div class="col-sm-12 col-md-6">
                <p class="fs-5"><span class="fw-bold">Application Status : </span><span> {{$app->order_status}} </span></p>
            </div>
            <div class="col-sm-12 col-md-6">
                <p class="fs-5"><span class="fw-bold">Application Id : </span><span> {{$app->id}} </span></p>
            </div>
            
           <!-- Document details -->
            <div class="row">
                <div class="col-12">
                    <!-- <p class="fs-4 fw-bold">Documents :</p> -->
                </div>
            </div>
          

            @foreach($app->application_documents as $doc)
            <div class="col-sm-12 col-md-6">
                <p class="fs-5"><span class="fw-bold">Document Id : </span><span> {{$doc->id}} </span></p>
            </div>
            <div class="col">
                image
                <!-- <p class="fs-5"><span class="fw-bold">Document Id : </span><span> {{$doc->id}} </span></p> -->
                <!-- <img src="/{{$doc->path}}" alt=""> -->
            
            </div>
           @endforeach
        </div>
   
        
    </div>
</div>

@endsection