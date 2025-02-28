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
            <!-- @if({{$application->no_of_brothers}}>0)   -->
                <tr><td>Brother's Details</td></tr>
                @foreach($application->sibling as $sib)
                <tr><td>Name: {{$sib->name}}</td></tr>


                @endforeach

            <!-- @endif -->
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
    </table>


   <!-- <table>
        <tr>
            <td>
                Parents Details:
            </td>   
        </tr>
    </table> -->

    @foreach($application->application_parents as $par)
    <table>
        
        @if($par->relation=='Mother')
        <tr>
            <td>
                    Mother's Name: {{$par->name}}
            </td>
            <td>
                   Age: {{$par->age}}
            </td>
        </tr>
        <tr>
            <td>
                    Nationality: {{$par->nationality}}
            </td>
            <td>
                   Religion: {{$par->religion}}
            </td>
        </tr>
        <tr>
            <td>
                    Qualification: {{$par->qualification}}
            </td>
            <td>
                    School name: {{$par->school_name}}
            </td>
        </tr>
        <tr>
            <td>
                    College name: {{$par->college_name}}
            </td>
            <td>
                    Profession: {{$par->profession}}
            </td>
        </tr>
        <tr>
            <td>
                   Office address: {{$par->office_address}}
            </td>
            <td>
                  Contact number: {{$par->contact_number}}
            </td>
        </tr>
        @endif
    </table>
    @endforeach

    @foreach($application->application_parents as $par)
    <table>
        @if($par->relation=='Father')
        <tr>
            <td>
                 Father's Name: {{$par->name}}
            </td>
            <td>
                 Age: {{$par->age}}
            </td>
        </tr>
        <tr>
            <td>
                   Nationality: {{$par->nationality}}
            </td>
            <td>
                    Religion: {{$par->religion}}
            </td>
        </tr>
        <tr>
            <td>
                    Qualification: {{$par->qualification}}
            </td>
            <td>
                   School_name: {{$par->school_name}}
            </td>
        </tr>
        <tr>
            <td>
                    College_name: {{$par->college_name}}
            </td>
            <td>
                    Profession: {{$par->profession}}
            </td>
        </tr>
        <tr>
            <td>
                    Office_address: {{$par->office_address}}
            </td>
            <td>
                    Contact_number: {{$par->contact_number}}
            </td>
        </tr>

        @endif

    </table>
    @endforeach

    @foreach($application->application_parents as $par)
    <table>
        @if($par->relation=='Guardian')
        <tr>
            <td>
                Guardian's Name: {{$par->name}}
            </td>
            <td>
                 Age: {{$par->age}}
            </td>
        </tr>
        <tr>
            <td>
                   Nationality: {{$par->nationality}}
            </td>
            <td>
                    Religion: {{$par->religion}}
            </td>
        </tr>
        <tr>
            <td>
                    Qualification: {{$par->qualification}}
            </td>
            <td>
                   School_name: {{$par->school_name}}
            </td>
        </tr>
        <tr>
            <td>
                    College_name: {{$par->college_name}}
            </td>
            <td>
                    Profession: {{$par->profession}}
            </td>
        </tr>
        <tr>
            <td>
                    Office_address: {{$par->office_address}}
            </td>
            <td>
                    Contact_number: {{$par->contact_number}}
            </td>
        </tr>

        @endif

    </table>
    @endforeach
    

    
  
</body>
</html>
