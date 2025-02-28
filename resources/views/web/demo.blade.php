<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Application Form</title>

<style>
* {
    margin: 0;
    padding: 0;
}
body {
    padding: 10mm 10mm 10mm 25mm;
}
table {
    width: 100%;
}
table, th, td {
  border: 1px solid black;
  border-collapse: collapse;
}
td, th {
    padding: 0.25mm;
}
.text-center{
    text-align: center;
}
.font-weight-bold { font-weight: bold; }
.p-0 { padding: 0mm; }
.p-1 { padding: 0.5mm; }
.p-2 { padding: 1mm; }
.p-3 { padding: 3mm; }
.p-4 { padding: 6mm; }
.p-5 { padding: 12mm; }
.w-20 { width: 20%; }
.w-25 { width: 25%; }
.w-50 { width: 50%; }
.w-75 { width: 75%; }
.w-100 { width: 100%; }
.page-break {
    page-break-after: always;
}
</style>
</head>
<body>

    <table>
        <tr>
            <td class="text-center p-1">
                <h1 style="">Coco Preschool</h1>
                <h5 style="">Sarvodaya Nagar, Jambhul Phata, Ambernath West, Thane 421505</h5>
                <h5 style="">Student Registeration Form For AY 2025-26</h5>
            </td>
        </tr>
    </table>

    <table>
        <tr>
            <td class="w-50">Admission type: {{$application->admission_for}}</td>
            <td class="w-50">Admission for {{$application->grade->grade}}</td>
        </tr>
    </table>

    <table><tr><td class="font-weight-bold">Personal Details :</td></tr></table>

    <table>
        <tr>
            <td class="">Full Name : {{$application->students_name}}   {{$application->fathers_name}}  {{$application->surname}}  {{$application->mothers_name}}</td>
            <td class="w-20" rowspan="7">
                <img src="data:image/png;base64,{{ base64_encode(file_get_contents(public_path('/storage/'.$application->photo))) }}" class="w-100">
            </td>
        </tr>
        <tr><td>Date of Birth : {{$application->date_of_birth}}</td></tr>
        <tr><td>Birth City : {{$application->birth_city}}</td></tr>
        <tr><td>Birth District : {{$application->birth_district}}</td></tr>
        <tr><td>Birth State : {{$application->birth_state}}</td></tr>
        <tr><td>Gender : {{$application->gender}}</td></tr>
        <tr><td>Blood Group : {{$application->blood_group}}</td></tr>
    </table>

    <table>
        <tr>
            <td class="w-50">Religion : {{$application->religion}}</td>
            <td class="w-50">Caste : {{$application->caste}}</td>
        </tr>
        <tr>
            <td class="w-50">Sub Caste : {{$application->sub_caste}}</td>
            <td class="w-50">Mother Tongue : {{$application->mother_tongue}}</td>
        </tr>
        <tr>
            <td class="w-50">Aadhar No : {{$application->aadhar_number}}</td>
            <td class="w-50">Native Place : {{$application->native_place}}</td>
        </tr>
    </table>

    <table><tr><td class="font-weight-bold">Contact Details :</td></tr></table>

    <table>
        <tr>
            <td colspan="2">Address : {{$application->address}}</td>
        </tr>
        <tr>
            <td class="w-50">City : {{$application->city}}</td>
            <td class="w-50">State : {{$application->state}}</td>
        </tr>
        <tr>
            <td>Country : {{$application->country}}</td>
            <td>Pincode : {{$application->pincode}}</td>
        </tr>
        <tr>
            <td>Primary Contact Number : {{$application->primary_contact_number}}</td>
            <td>Email : {{$application->user->email}}</td>
        </tr>
    </table>

    <table><tr><td class="font-weight-bold">Sibling Details :</td></tr></table>

    <table>
        <tr>
            <td class="w-50">No of Brothers : {{$application->no_of_brothers}}</td>
            <td class="w-50">No of Sisters : {{$application->no_of_sisters}}</td>
        </tr>
    </table>

    <table>
        @foreach($application->application_siblings as $sib)
        <tr>
            <td>{{$sib->name}}</td>
            <td class="w-25">{{$sib->relation}}</td>
            <td class="w-25">{{$sib->age}} Years</td>
        </tr>
        <tr>
            <td colspan="2">{{$sib->school_college}}</td>
            <td>{{$sib->grade}}</td>
        </tr>
        @endforeach
    </table>

    <table><tr><td class="font-weight-bold">Parents Details :</td></tr></table>


    @foreach($application->application_parents as $par)
    <table>
        <tr>
            <td class="w-50">{{$par->relation}}'s Name: {{$par->name}}</td>
            <td class="w-50">Age: {{$par->age}}</td>
        </tr>
        <tr>
            <td>Nationality: {{$par->nationality}}</td>
            <td>Religion: {{$par->religion}}</td>
        </tr>
        <tr>
            <td>Qualification: {{$par->qualification}}</td>
            <td>School name: {{$par->school_name}}</td>
        </tr>
        <tr>
            <td>College name: {{$par->college_name}}</td>
            <td>Profession: {{$par->profession}}</td>
        </tr>
        <tr>
            <td>Office address: {{$par->office_address}}</td>
            <td>Contact number: {{$par->contact_number}}</td>
        </tr>
    </table>
    @endforeach

    <table><tr><td class="font-weight-bold">Payment Details :</td></tr></table>

    <table>
        <tr>
            <td class="w-50">Tracking Id : {{$application->tracking_id}}</td>
            <td class="w-50">Bank Reference No : {{$application->bank_ref_no}}</td>
        </tr>
        <tr>
            <td>Application Status : {{$application->order_status}}</td>
            <td>Application ID : {{$application->id}}</td>
        </tr>
    </table>

    <table>
        <tr>
            <td class="p-3">
                Please carry original documents and photocopy of following documents.
                @foreach($application->grade->grade_wise_documents as $do)
                <ul style="margin-left: 40px;">
                    <li>{{ $do->document->document }}</li>
                </ul>
                @endforeach
            </td>
        </tr>
    </table>

    <!-- @foreach($application->application_documents as $doc)
    @if($doc->document_id != 3)
    <div class="page-break"></div>
    <table>
        <tr>
            <td>
                <img src="data:image/png;base64,{{ base64_encode(file_get_contents(public_path('/storage/'.$doc->path))) }}" class="w-50">
            </td>
        </tr>
    </table>
    @endif
    @endforeach -->
  
</body>
</html>
