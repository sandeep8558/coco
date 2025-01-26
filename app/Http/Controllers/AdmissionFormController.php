<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\AdmissionNotice;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Validator;
use App\Models\GradeWiseDocument;
use Auth;

class AdmissionFormController extends Controller
{

    public function index($id, Request $request){

        if(!Auth::check()){
            session(['form_path' => url()->current()]);
        } else {
            session()->forget('form_path');
        }

        $path = "/online_application/".$id."/save";
        $admission_notice = AdmissionNotice::find($id);
        $step = (isset($request->step)) ? $request->step : 1;

        $this->sessionToRequest($request);

        $docs = null;
        if($request->has('grade_id')){
            $grade_id = request()->grade_id;
            $docs = GradeWiseDocument::where('grade_id', $grade_id)->get();
        }

       

        return view('web.online_application', compact('step', 'path', 'admission_notice', 'docs', 'id'));
    }

    public function save($id, Request $request){

        $path = "/online_application/".$id;
        $step = (isset($request->step)) ? $request->step : 1;

        if($step == 1){
        }

        if($step == 2){
            $step1Validator = $this->validateStep1($request);
            if ($step1Validator->fails()){
                return redirect($path."?step=1")->withErrors($step1Validator)->withInput();
            }
            return redirect($path."?step=2");
        }

        if($step == 3){
            $step2Validator = $this->validateStep2($request);
            if ($step2Validator->fails()){
                return redirect($path."?step=2")->withErrors($step2Validator)->withInput();
            }
            return redirect($path."?step=3");
        }

        if($step == 4){
            $step3Validator = $this->validateStep3($request);
            if ($step3Validator->fails()){
                return redirect($path."?step=3")->withErrors($step3Validator)->withInput();
            }
            return redirect($path."?step=4");
        }

        if($step == 5){
            $step4Validator = $this->validateStep4($request);
            if ($step4Validator->fails()){
                return redirect($path."?step=4")->withErrors($step4Validator)->withInput();
            }

            if((session('parentguardian') == 'parent' && session('singleparent') == 'No')){
                return redirect($path."?step=5");
            } else if((session('parentguardian') == 'parent' && session('singleparent') == 'Yes' && session('singlewho') == 'Mother')){
                return redirect($path."?step=5");
            } else if((session('parentguardian') == 'parent' && session('singleparent') == 'Yes' && session('singlewho') == 'Father')){
                return redirect($path."?step=6");
            } else if(session('parentguardian') == 'guardian') {
                return redirect($path."?step=7");
            }
        }

        if($step == 6){
            $step5Validator = $this->validateStep5($request);

            if((session('parentguardian') == 'parent' && session('singleparent') == 'No')){
                if ($step5Validator->fails()){
                    return redirect($path."?step=5")->withErrors($step5Validator)->withInput();
                }
                return redirect($path."?step=6");
            } else if((session('parentguardian') == 'parent' && session('singleparent') == 'Yes' && session('singlewho') == 'Mother')){
                if ($step5Validator->fails()){
                    return redirect($path."?step=5")->withErrors($step5Validator)->withInput();
                }
                return redirect($path."?step=8");
            } else if((session('parentguardian') == 'parent' && session('singleparent') == 'Yes' && session('singlewho') == 'Father')){
                return redirect($path."?step=6");
            } else if(session('parentguardian') == 'guardian') {
                return redirect($path."?step=7");
            }
        }

        if($step == 7){
            $step6Validator = $this->validateStep6($request);


            if((session('parentguardian') == 'parent' && session('singleparent') == 'No')){
                if ($step6Validator->fails()){
                    return redirect($path."?step=6")->withErrors($step6Validator)->withInput();
                }
                return redirect($path."?step=8");
            } else if((session('parentguardian') == 'parent' && session('singleparent') == 'Yes' && session('singlewho') == 'Mother')){
                return redirect($path."?step=8");
            } else if((session('parentguardian') == 'parent' && session('singleparent') == 'Yes' && session('singlewho') == 'Father')){
                if ($step6Validator->fails()){
                    return redirect($path."?step=6")->withErrors($step6Validator)->withInput();
                }
                return redirect($path."?step=8");
            } else if(session('parentguardian') == 'guardian') {
                return redirect($path."?step=7");
            }

            
            
        }

        if($step == 8){
            $step7Validator = $this->validateStep7($request);

            if(session('parentguardian') == 'guardian') {
                if ($step7Validator->fails()){
                    return redirect($path."?step=7")->withErrors($step7Validator)->withInput();
                }
            }

            return redirect($path."?step=8");
        }

        if($step == 9){
            $step8Validator = $this->validateStep8($request);
            if ($step8Validator->fails()){
                return redirect($path."?step=8")->withErrors($step8Validator)->withInput();
            }
            return redirect($path."?step=9");
        }

        if($step == 10){
            $step9Validator = $this->validateStep9($request);
            if ($step9Validator->fails()){
                return redirect($path."?step=9")->withErrors($step9Validator)->withInput();
            }
            return redirect($path."?step=10");
        }

        if($step == 11){
            $paths = [];
            foreach($request->docs as $index => $doc){
                $paths[] = $doc->store('documents', 'documents');
            }
            session([
                "paths" => $paths,
                "document_id" => $request->document_id,
            ]);
            return redirect($path."?step=11");
        }

        if($step == 12){
            return redirect($path."?step=12");
        }
    }

    private function validateStep1(Request $request){

        $validator = Validator::make($request->all(), [
            'admission_for' => 'required',
            'grade_id' => 'required',
        ]);

        session($request->all());

        return $validator;
    }

    private function validateStep2(Request $request){

        $validator = Validator::make($request->all(), [
            'surname' => 'required',
            'students_name' => 'required',
            'fathers_name' => 'required',
            'mothers_name' => 'required',
            'gender' => 'required',
            'blood_group' => 'required',
            'aadhar_number' => 'required',
            'mother_tongue' => 'required',
            'date_of_birth' => 'required',
            'birth_city' => 'required',
            'birth_district' => 'required',
            'birth_state' => 'required',
            'religion' => 'required',
            'native_place' => 'required',
        ]);

        session($request->all());

        return $validator;
    }

    private function validateStep3(Request $request){

        $validator = Validator::make($request->all(), [
            'address' => 'required',
            'city' => 'required',
            'state' => 'required',
            'country' => 'required',
            'pincode' => 'required',
            'primary_contact_number' => 'required',
        ]);

        session($request->all());

        return $validator;
    }

    private function validateStep4(Request $request){

        $validator = Validator::make($request->all(), [
            'parentguardian' => 'required',
            'singleparent' => '',
            'singlewho' => '',
        ]);

        session($request->all());

        return $validator;
    }

    private function validateStep5(Request $request){

        $validator = Validator::make($request->all(), [
            'mothersname' => 'required',
            'mothersage' => 'required',
            'mothersnationality' => 'required',
            'mothersreligion' => 'required',
            'mothersqualification' => 'required',
            'mothersschool_name' => 'required',
            'motherscollege_name' => 'required',
            'mothersprofession' => 'required',
            'mothersoffice_address' => 'required',
            'motherscontact_number' => 'required',
        ]);

        session($request->all());

        return $validator;
    }

    private function validateStep6(Request $request){

        $validator = Validator::make($request->all(), [
            'fathersname' => 'required',
            'fathersage' => 'required',
            'fathersnationality' => 'required',
            'fathersreligion' => 'required',
            'fathersqualification' => 'required',
            'fathersschool_name' => 'required',
            'fatherscollege_name' => 'required',
            'fathersprofession' => 'required',
            'fathersoffice_address' => 'required',
            'fatherscontact_number' => 'required',
        ]);

        session($request->all());

        return $validator;
    }

    private function validateStep7(Request $request){

        $validator = Validator::make($request->all(), [
            'guardiansname' => 'required',
            'guardiansage' => 'required',
            'guardiansnationality' => 'required',
            'guardiansreligion' => 'required',
            'guardiansqualification' => 'required',
            'guardiansschool_name' => 'required',
            'guardianscollege_name' => 'required',
            'guardiansprofession' => 'required',
            'guardiansoffice_address' => 'required',
            'guardianscontact_number' => 'required',
        ]);

        session($request->all());

        return $validator;
    }

    private function validateStep8(Request $request){

        $validator = Validator::make($request->all(), [
            'no_of_brothers' => 'required',
            'no_of_sisters' => 'required',
        ]);

        session($request->all());

        return $validator;
    }

    private function validateStep9(Request $request){

        $validator = Validator::make($request->all(), [
            // 'no_of_brothers' => 'required',
        ]);

        session($request->all());

        return $validator;
    }

    private function sessionToRequest(Request $request){

        if($request->session()->exists('grade_id')){ 
            if($request->has('grade_id')) {
                $request->grade_id = session('grade_id');
            } else {
                $request->merge(['grade_id' => session('grade_id')]);
            }
        }
        if($request->session()->exists('admission_for')){ 
            if($request->has('admission_for')) {
                $request->admission_for = session('admission_for');
            } else {
                $request->merge(['admission_for' => session('admission_for')]);
            }
        }
        if($request->session()->exists('surname')){ 
            if($request->has('surname')) {
                $request->surname = session('surname');
            } else {
                $request->merge(['surname' => session('surname')]);
            }
        }
        if($request->session()->exists('students_name')){ 
            if($request->has('students_name')) {
                $request->students_name = session('students_name');
            } else {
                $request->merge(['students_name' => session('students_name')]);
            }
        }
        if($request->session()->exists('fathers_name')){ 
            if($request->has('fathers_name')) {
                $request->fathers_name = session('fathers_name');
            } else {
                $request->merge(['fathers_name' => session('fathers_name')]);
            }
        }
        if($request->session()->exists('mothers_name')){ 
            if($request->has('mothers_name')) {
                $request->mothers_name = session('mothers_name');
            } else {
                $request->merge(['mothers_name' => session('mothers_name')]);
            }
        }
        if($request->session()->exists('address')){ 
            if($request->has('address')) {
                $request->address = session('address');
            } else {
                $request->merge(['address' => session('address')]);
            }
        }
        if($request->session()->exists('city')){ 
            if($request->has('city')) {
                $request->city = session('city');
            } else {
                $request->merge(['city' => session('city')]);
            }
        }
        if($request->session()->exists('state')){ 
            if($request->has('state')) {
                $request->state = session('state');
            } else {
                $request->merge(['state' => session('state')]);
            }
        }
        if($request->session()->exists('country')){ 
            if($request->has('country')) {
                $request->country = session('country');
            } else {
                $request->merge(['country' => session('country')]);
            }
        }
        if($request->session()->exists('pincode')){ 
            if($request->has('pincode')) {
                $request->pincode = session('pincode');
            } else {
                $request->merge(['pincode' => session('pincode')]);
            }
        }
        if($request->session()->exists('primary_contact_number')){ 
            if($request->has('primary_contact_number')) {
                $request->primary_contact_number = session('primary_contact_number');
            } else {
                $request->merge(['primary_contact_number' => session('primary_contact_number')]);
            }
        }
        if($request->session()->exists('gender')){ 
            if($request->has('gender')) {
                $request->gender = session('gender');
            } else {
                $request->merge(['gender' => session('gender')]);
            }
        }
        if($request->session()->exists('blood_group')){ 
            if($request->has('blood_group')) {
                $request->blood_group = session('blood_group');
            } else {
                $request->merge(['blood_group' => session('blood_group')]);
            }
        }
        if($request->session()->exists('aadhar_number')){ 
            if($request->has('aadhar_number')) {
                $request->aadhar_number = session('aadhar_number');
            } else {
                $request->merge(['aadhar_number' => session('aadhar_number')]);
            }
        }
        if($request->session()->exists('mother_tongue')){ 
            if($request->has('mother_tongue')) {
                $request->mother_tongue = session('mother_tongue');
            } else {
                $request->merge(['mother_tongue' => session('mother_tongue')]);
            }
        }
        if($request->session()->exists('date_of_birth')){ 
            if($request->has('date_of_birth')) {
                $request->date_of_birth = session('date_of_birth');
            } else {
                $request->merge(['date_of_birth' => session('date_of_birth')]);
            }
        }
        if($request->session()->exists('birth_city')){ 
            if($request->has('birth_city')) {
                $request->birth_city = session('birth_city');
            } else {
                $request->merge(['birth_city' => session('birth_city')]);
            }
        }
        if($request->session()->exists('birth_district')){ 
            if($request->has('birth_district')) {
                $request->birth_district = session('birth_district');
            } else {
                $request->merge(['birth_district' => session('birth_district')]);
            }
        }
        if($request->session()->exists('birth_state')){ 
            if($request->has('birth_state')) {
                $request->birth_state = session('birth_state');
            } else {
                $request->merge(['birth_state' => session('birth_state')]);
            }
        }
        if($request->session()->exists('religion')){ 
            if($request->has('religion')) {
                $request->religion = session('religion');
            } else {
                $request->merge(['religion' => session('religion')]);
            }
        }
        if($request->session()->exists('native_place')){ 
            if($request->has('native_place')) {
                $request->native_place = session('native_place');
            } else {
                $request->merge(['native_place' => session('native_place')]);
            }
        }
        if($request->session()->exists('caste')){ 
            if($request->has('caste')) {
                $request->caste = session('caste');
            } else {
                $request->merge(['caste' => session('caste')]);
            }
        }
        if($request->session()->exists('sub_caste')){ 
            if($request->has('sub_caste')) {
                $request->sub_caste = session('sub_caste');
            } else {
                $request->merge(['sub_caste' => session('sub_caste')]);
            }
        }
        if($request->session()->exists('parentguardian')){ 
            if($request->has('parentguardian')) {
                $request->parentguardian = session('parentguardian');
            } else {
                $request->merge(['parentguardian' => session('parentguardian')]);
            }
        }
        if($request->session()->exists('singleparent')){ 
            if($request->has('singleparent')) {
                $request->singleparent = session('singleparent');
            } else {
                $request->merge(['singleparent' => session('parentguardian') == 'parent' ? session('singleparent') : '']);
            }
        }
        if($request->session()->exists('singlewho')){ 
            if($request->has('singlewho')) {
                $request->singlewho = session('singlewho');
            } else {
                $request->merge(['singlewho' => session('parentguardian') == 'parent' ? session('singlewho') : '']);
            }
        }

        if($request->session()->exists('mothersname')){ 
            if($request->has('mothersname')) {
                $request->mothersname = session('mothersname');
            } else {
                $request->merge(['mothersname' => session('mothersname')]);
            }
        }
        if($request->session()->exists('mothersage')){ 
            if($request->has('mothersage')) {
                $request->mothersage = session('mothersage');
            } else {
                $request->merge(['mothersage' => session('mothersage')]);
            }
        }
        if($request->session()->exists('mothersnationality')){ 
            if($request->has('mothersnationality')) {
                $request->mothersnationality = session('mothersnationality');
            } else {
                $request->merge(['mothersnationality' => session('mothersnationality')]);
            }
        }
        if($request->session()->exists('mothersreligion')){ 
            if($request->has('mothersreligion')) {
                $request->mothersreligion = session('mothersreligion');
            } else {
                $request->merge(['mothersreligion' => session('mothersreligion')]);
            }
        }
        if($request->session()->exists('mothersqualification')){ 
            if($request->has('mothersqualification')) {
                $request->mothersqualification = session('mothersqualification');
            } else {
                $request->merge(['mothersqualification' => session('mothersqualification')]);
            }
        }
        if($request->session()->exists('mothersschool_name')){ 
            if($request->has('mothersschool_name')) {
                $request->mothersschool_name = session('mothersschool_name');
            } else {
                $request->merge(['mothersschool_name' => session('mothersschool_name')]);
            }
        }
        if($request->session()->exists('motherscollege_name')){ 
            if($request->has('motherscollege_name')) {
                $request->motherscollege_name = session('motherscollege_name');
            } else {
                $request->merge(['motherscollege_name' => session('motherscollege_name')]);
            }
        }
        if($request->session()->exists('mothersprofession')){ 
            if($request->has('mothersprofession')) {
                $request->mothersprofession = session('mothersprofession');
            } else {
                $request->merge(['mothersprofession' => session('mothersprofession')]);
            }
        }
        if($request->session()->exists('mothersoffice_address')){ 
            if($request->has('mothersoffice_address')) {
                $request->mothersoffice_address = session('mothersoffice_address');
            } else {
                $request->merge(['mothersoffice_address' => session('mothersoffice_address')]);
            }
        }
        if($request->session()->exists('motherscontact_number')){ 
            if($request->has('motherscontact_number')) {
                $request->motherscontact_number = session('motherscontact_number');
            } else {
                $request->merge(['motherscontact_number' => session('motherscontact_number')]);
            }
        }

        if($request->session()->exists('fathersname')){ 
            if($request->has('fathersname')) {
                $request->fathersname = session('fathersname');
            } else {
                $request->merge(['fathersname' => session('fathersname')]);
            }
        }
        if($request->session()->exists('fathersage')){ 
            if($request->has('fathersage')) {
                $request->fathersage = session('fathersage');
            } else {
                $request->merge(['fathersage' => session('fathersage')]);
            }
        }
        if($request->session()->exists('fathersnationality')){ 
            if($request->has('fathersnationality')) {
                $request->fathersnationality = session('fathersnationality');
            } else {
                $request->merge(['fathersnationality' => session('fathersnationality')]);
            }
        }
        if($request->session()->exists('fathersreligion')){ 
            if($request->has('fathersreligion')) {
                $request->fathersreligion = session('fathersreligion');
            } else {
                $request->merge(['fathersreligion' => session('fathersreligion')]);
            }
        }
        if($request->session()->exists('fathersqualification')){ 
            if($request->has('fathersqualification')) {
                $request->fathersqualification = session('fathersqualification');
            } else {
                $request->merge(['fathersqualification' => session('fathersqualification')]);
            }
        }
        if($request->session()->exists('fathersschool_name')){ 
            if($request->has('fathersschool_name')) {
                $request->fathersschool_name = session('fathersschool_name');
            } else {
                $request->merge(['fathersschool_name' => session('fathersschool_name')]);
            }
        }
        if($request->session()->exists('fatherscollege_name')){ 
            if($request->has('fatherscollege_name')) {
                $request->fatherscollege_name = session('fatherscollege_name');
            } else {
                $request->merge(['fatherscollege_name' => session('fatherscollege_name')]);
            }
        }
        if($request->session()->exists('fathersprofession')){ 
            if($request->has('fathersprofession')) {
                $request->fathersprofession = session('fathersprofession');
            } else {
                $request->merge(['fathersprofession' => session('fathersprofession')]);
            }
        }
        if($request->session()->exists('fathersoffice_address')){ 
            if($request->has('fathersoffice_address')) {
                $request->fathersoffice_address = session('fathersoffice_address');
            } else {
                $request->merge(['fathersoffice_address' => session('fathersoffice_address')]);
            }
        }
        if($request->session()->exists('fatherscontact_number')){ 
            if($request->has('fatherscontact_number')) {
                $request->fatherscontact_number = session('fatherscontact_number');
            } else {
                $request->merge(['fatherscontact_number' => session('fatherscontact_number')]);
            }
        }

        if($request->session()->exists('guardiansname')){ 
            if($request->has('guardiansname')) {
                $request->guardiansname = session('guardiansname');
            } else {
                $request->merge(['guardiansname' => session('guardiansname')]);
            }
        }
        if($request->session()->exists('guardiansage')){ 
            if($request->has('guardiansage')) {
                $request->guardiansage = session('guardiansage');
            } else {
                $request->merge(['guardiansage' => session('guardiansage')]);
            }
        }
        if($request->session()->exists('guardiansnationality')){ 
            if($request->has('guardiansnationality')) {
                $request->guardiansnationality = session('guardiansnationality');
            } else {
                $request->merge(['guardiansnationality' => session('guardiansnationality')]);
            }
        }
        if($request->session()->exists('guardiansreligion')){ 
            if($request->has('guardiansreligion')) {
                $request->guardiansreligion = session('guardiansreligion');
            } else {
                $request->merge(['guardiansreligion' => session('guardiansreligion')]);
            }
        }
        if($request->session()->exists('guardiansqualification')){ 
            if($request->has('guardiansqualification')) {
                $request->guardiansqualification = session('guardiansqualification');
            } else {
                $request->merge(['guardiansqualification' => session('guardiansqualification')]);
            }
        }
        if($request->session()->exists('guardiansschool_name')){ 
            if($request->has('guardiansschool_name')) {
                $request->guardiansschool_name = session('guardiansschool_name');
            } else {
                $request->merge(['guardiansschool_name' => session('guardiansschool_name')]);
            }
        }
        if($request->session()->exists('guardianscollege_name')){ 
            if($request->has('guardianscollege_name')) {
                $request->guardianscollege_name = session('guardianscollege_name');
            } else {
                $request->merge(['guardianscollege_name' => session('guardianscollege_name')]);
            }
        }
        if($request->session()->exists('guardiansprofession')){ 
            if($request->has('guardiansprofession')) {
                $request->guardiansprofession = session('guardiansprofession');
            } else {
                $request->merge(['guardiansprofession' => session('guardiansprofession')]);
            }
        }
        if($request->session()->exists('guardiansoffice_address')){ 
            if($request->has('guardiansoffice_address')) {
                $request->guardiansoffice_address = session('guardiansoffice_address');
            } else {
                $request->merge(['guardiansoffice_address' => session('guardiansoffice_address')]);
            }
        }
        if($request->session()->exists('guardianscontact_number')){ 
            if($request->has('guardianscontact_number')) {
                $request->guardianscontact_number = session('guardianscontact_number');
            } else {
                $request->merge(['guardianscontact_number' => session('guardianscontact_number')]);
            }
        }

        if($request->session()->exists('no_of_brothers')){ 
            if($request->has('no_of_brothers')) {
                $request->no_of_brothers = session('no_of_brothers');
            } else {
                $request->merge(['no_of_brothers' => session('no_of_brothers')]);
            }
        }
        if($request->session()->exists('no_of_sisters')){ 
            if($request->has('no_of_sisters')) {
                $request->no_of_sisters = session('no_of_sisters');
            } else {
                $request->merge(['no_of_sisters' => session('no_of_sisters')]);
            }
        }

        if($request->session()->exists('sistername')){ 
            if($request->has('sistername')) {
                $request->sistername = session('sistername');
            } else {
                $request->merge(['sistername' => session('sistername')]);
            }
        }

        if($request->session()->exists('sisterage')){ 
            if($request->has('sisterage')) {
                $request->sisterage = session('sisterage');
            } else {
                $request->merge(['sisterage' => session('sisterage')]);
            }
        }

        if($request->session()->exists('sisterschool_college')){ 
            if($request->has('sisterschool_college')) {
                $request->sisterschool_college = session('sisterschool_college');
            } else {
                $request->merge(['sisterschool_college' => session('sisterschool_college')]);
            }
        }

        if($request->session()->exists('sistergrade')){ 
            if($request->has('sistergrade')) {
                $request->sistergrade = session('sistergrade');
            } else {
                $request->merge(['sistergrade' => session('sistergrade')]);
            }
        }

        if($request->session()->exists('brothername')){ 
            if($request->has('brothername')) {
                $request->brothername = session('brothername');
            } else {
                $request->merge(['brothername' => session('brothername')]);
            }
        }

        if($request->session()->exists('brotherage')){ 
            if($request->has('brotherage')) {
                $request->brotherage = session('brotherage');
            } else {
                $request->merge(['brotherage' => session('brotherage')]);
            }
        }

        if($request->session()->exists('brotherschool_college')){ 
            if($request->has('brotherschool_college')) {
                $request->brotherschool_college = session('brotherschool_college');
            } else {
                $request->merge(['brotherschool_college' => session('brotherschool_college')]);
            }
        }

        if($request->session()->exists('brothergrade')){ 
            if($request->has('brothergrade')) {
                $request->brothergrade = session('brothergrade');
            } else {
                $request->merge(['brothergrade' => session('brothergrade')]);
            }
        }

        if($request->session()->exists('paths')){ 
            if($request->has('paths')) {
                $request->paths = session('paths');
            } else {
                $request->merge(['paths' => session('paths')]);
            }
        }

        if($request->session()->exists('document_id')){ 
            if($request->has('document_id')) {
                $request->document_id = session('document_id');
            } else {
                $request->merge(['document_id' => session('document_id')]);
            }
        }

        

    }

}
