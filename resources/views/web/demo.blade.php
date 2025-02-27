<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Application Form</title>
</head>
<body>
  
<h1 style="text-align:center ">Coco Preschool</h1>
<h3 style="text-align:center">Student Registeration Form For AY 2025-26</h3>
<h3 style="text-align:center">Sarvodaya Nagar, Ambernath West 421505</h3>
<hr>
    <table class="padding-0">
            
    </table>


    <table class="table">
    <tr>
        <td>
            Personal Details :  
        </td>
    </tr>
    <tr>
        <td>
         Full Name :
            {{$application->students_name}}   {{$application->fathers_name}}  {{$application->surname}}  {{$application->mothers_name}} 
        </td>
        <td>    
            Admission for 
             {{$application->grade_id}}    
        </td>
    </tr>
    <tr>
        <td>
            Date of Birth : {{$application->date_of_birth}}   
             
        </td>
        <td>
            Birth City : {{$application->birth_city}}    
             
        </td>
    </tr>
    <tr>
        <td>
            Birth District : {{$application->birth_district}}    
             
        </td>
        <td>
            
            Birth State : {{$application->birth_state}}    
        </td>
    </tr>
    <tr>
        <td>
            Religion : {{$application->religion}}    
        </td>
    </tr>
    <tr>
        <td>
            Caste : {{$application->caste}}    
        </td>
        <td>
            Sub Caste : {{$application->sub_caste}}    
        </td>
    </tr>
    <tr>
        <td>
            Gender : {{$application->gender}}    
        </td>
        <td>
            Blood Group : {{$application->blood_group}}    
        </td>
    </tr>
    <tr>
        <td>
           Mother Tongue : {{$application->mother_tongue}}    
        </td>
    </tr>
    <tr>
        <td>
            Aadhar No : {{$application->aadhar_number}}    
        </td>
        <td>
            Primary Contact Number : {{$application->primary_contact_number}}    
        </td>
    </tr>
    <tr>
        <td>
            Address : {{$application->address}}    
        </td>
        <td>
            City : {{$application->city}}    
        </td>
    </tr>
    <tr>
        <td>
            State : {{$application->state}}    
        </td>
        <td>
            Country : {{$application->country}}    
        </td>
    </tr>
    <tr>
        <td>
            Pincode : {{$application->pincode}}    
        </td>
        <td>
            Native Place : {{$application->native_place}}    
        </td>
    </tr>
    <br>
    <tr>
        <td class="">
            Sibling Details :
        </td class="">
    </tr>
    <tr>
        <td>
           
            No of Brothers : {{$application->no_of_brothers}}    
        </td>
        <td>
            No of Sisters : {{$application->no_of_sisters}}    
        </td>
    </tr>
    <br>
    <tr>
        <td class="">
            Payment Details :
        </td class="">
    </tr>
    <tr>
        <td>
            Tracking Id : {{$application->tracking_id}}    
        </td>
        <td>
           Bank Reference No : {{$application->bank_ref_no}}    
        </td>
    </tr>
    <tr>
        <td>
           Application Status : {{$application->order_status}}    
        </td>
        <td>
          Admission Notice : {{$application->admission_notice_id}}    
        </td>
    </tr>
    <tr>
        <td>
        @foreach($application->application_parents as $par)

            @if($par->relation == "Father")
                $father = [
                    'fathersname' => $par->name,
                    'fathersage' => $par->age,
                    'fathersnationality' => $par->nationality,
                    'fathersreligion' => $par->religion,
                    'fathersqualification' => $par->qualification,
                    'fathersschool_name' => $par->school_name,
                    'fatherscollege_name' => $par->college_name,
                    'fathersprofession' => $par->profession,
                    'fathersoffice_address' => $par->office_address,
                    'fatherscontact_number' => $par->contact_number,
                ];

                session($father);
            @endif
        @endforeach
        </td>
        
    </tr>

  
    </table>


</body>
</html>

birth_city