<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;
use App\Models\Application;
use Auth;

class PaymentController extends Controller
{
    private $merchantID;
    private $AccessCode;
    private $WorkingKey;

    public function __construct(){
        $this->merchantID = "4094602";
        $this->AccessCode = "ATNI48MA81BX62INXB";
        $this->WorkingKey = "2E41E11BF34B3B562B2DBD21D2CEE791";
    }

    public function index(){
        return view('web.form.payment');
    }

    public function saveOrder(){

        $session_data = session()->all();
        $application_id = null;

        $application_data = [
            "user_id" => Auth::user()->id,
            "grade_id" => $session_data["grade_id"],
            "admission_for" => $session_data["admission_for"],
            "surname" => $session_data["surname"],
            "students_name" => $session_data["students_name"],
            "fathers_name" => $session_data["fathers_name"],
            "mothers_name" => $session_data["mothers_name"],
            "date_of_birth" => $session_data["date_of_birth"],
            "birth_city" => $session_data["birth_city"],
            "birth_district" => $session_data["birth_district"],
            "birth_state" => $session_data["birth_state"],
            "religion" => $session_data["religion"],
            "caste" => $session_data["caste"],
            "sub_caste" => $session_data["sub_caste"],
            "gender" => $session_data["gender"],
            "aadhar_number" => $session_data["aadhar_number"],
            "mother_tongue" => $session_data["mother_tongue"],
            "native_place" => $session_data["native_place"],
            "blood_group" => $session_data["blood_group"],
            "primary_contact_number" => $session_data["primary_contact_number"],
            "address" => $session_data["address"],
            "city" => $session_data["city"],
            "state" => $session_data["state"],
            "country" => $session_data["country"],
            "pincode" => $session_data["pincode"],
            "no_of_brothers" => $session_data["no_of_brothers"],
            "no_of_sisters" => $session_data["no_of_sisters"],
        ];

        $application = Application::create($application_data);

        $application_id = $application->id;

        $parents_data = [];

        if($session_data["parentguardian"] == 'guardian'){
            $parents_data [] = [
                "relation" => "Guardian",
                "name" => $session_data["guardiansname"],
                "age" => $session_data["guardiansage"],
                "nationality" => $session_data["guardiansnationality"],
                "religion" => $session_data["guardiansreligion"],
                "qualification" => $session_data["guardiansqualification"],
                "school_name" => $session_data["guardiansschool_name"],
                "college_name" => $session_data["guardianscollege_name"],
                "profession" => $session_data["guardiansprofession"],
                "office_address" => $session_data["guardiansoffice_address"],
                "contact_number" => $session_data["guardianscontact_number"],
            ];
        }

        if($session_data["parentguardian"] == 'parent' && ($session_data["singleparent"] == "No" || ($session_data["singleparent"] == "Yes"&&$session_data["singlewho"] == "Mother"))){
            $parents_data [] = [
                "relation" => "Mother",
                "name" => $session_data["mothersname"],
                "age" => $session_data["mothersage"],
                "nationality" => $session_data["mothersnationality"],
                "religion" => $session_data["mothersreligion"],
                "qualification" => $session_data["mothersqualification"],
                "school_name" => $session_data["mothersschool_name"],
                "college_name" => $session_data["motherscollege_name"],
                "profession" => $session_data["mothersprofession"],
                "office_address" => $session_data["mothersoffice_address"],
                "contact_number" => $session_data["motherscontact_number"],
            ];
        }

        if($session_data["parentguardian"] == 'parent' && ($session_data["singleparent"] == "No" || ($session_data["singleparent"] == "Yes"&&$session_data["singlewho"] == "Father"))){
            $parents_data [] = [
                "relation" => "Father",
                "name" => $session_data["fathersname"],
                "age" => $session_data["fathersage"],
                "nationality" => $session_data["fathersnationality"],
                "religion" => $session_data["fathersreligion"],
                "qualification" => $session_data["fathersqualification"],
                "school_name" => $session_data["fathersschool_name"],
                "college_name" => $session_data["fatherscollege_name"],
                "profession" => $session_data["fathersprofession"],
                "office_address" => $session_data["fathersoffice_address"],
                "contact_number" => $session_data["fatherscontact_number"],
            ];
        }

        foreach($parents_data as $pd){
            $application->application_parents()->create($pd);
        }

        $siblings_data = [];
        if($session_data["no_of_brothers"] > 0){
            $brothers = $session_data["no_of_brothers"];
            for($i=0; $i<$brothers; $i++){
                $siblings_data[] = [
                    "relation" => "Brother",
                    "name" => $session_data["brothername"][$i],
                    "age" => $session_data["brotherage"][$i],
                    "school_college" => $session_data["brotherschool_college"][$i],
                    "grade" => $session_data["brothergrade"][$i],
                ];
            }
        }

        if($session_data["no_of_sisters"] > 0){
            $sisters = $session_data["no_of_sisters"];
            for($i=0; $i<$sisters; $i++){
                $siblings_data[] = [
                    "relation" => "Sister",
                    "name" => $session_data["sistername"][$i],
                    "age" => $session_data["sisterage"][$i],
                    "school_college" => $session_data["sisterschool_college"][$i],
                    "grade" => $session_data["sistergrade"][$i],
                ];
            }
        }

        foreach($siblings_data as $sd){
            $application->application_siblings()->create($sd);
        }

        $documents_data = [];
        if(session()->has('paths')){
            if(sizeof($session_data["paths"]) > 0){
                foreach($session_data["paths"] as $ind => $path){
                    $documents_data[] = [

                        "document_id" => $session_data["document_id"][$ind],
                        "path" => $path,
                    ];
                }
    
            }
        }

        foreach($documents_data as $dd){
            $application->application_documents()->create($dd);
        }


        return $application;

    }

    public function paymentRequest(Request $request)
    {

        $application = $this->saveOrder();

        $input = $request->all();

        $input['currency'] = "INR";
        $input['redirect_url'] = "https://cocoschool.in/payment/response";
        $input['cancel_url'] = "https://cocoschool.in/payment/response";
        $input['language'] = "EN";
        $input['merchant_id'] = $this->merchantID;
        $input['order_id'] = $application->id;

        $input['billing_name'] = "Sandeep Rathod";
        $input['billing_address'] = $application->address;
        $input['billing_city'] = $application->city;
        $input['billing_state'] = $application->state;
        $input['billing_zip'] = $application->pincode;
        $input['billing_country'] = $application->country;
        $input['billing_tel'] = $application->primary_contact_number;
        $input['billing_email'] = Auth::user()->email;

        $merchant_data = "";

        foreach ($input as $key => $value) {
            $merchant_data .= $key . '=' . $value . '&';
        }

        $encrypted_data = $this->encryptCC($merchant_data, $this->WorkingKey);
        $url = 'https://test.ccavenue.com/transaction/transaction.do?command=initiateTransaction&encRequest=' . $encrypted_data . '&access_code=' . $this->AccessCode;

        return redirect($url);
    }

    public function paymentResponse(Request $request)
    {
        try {
            $encResponse = $_POST["encResp"];
            $rcvdString = $this->decryptCC($encResponse, $this->WorkingKey);
            $order_status = "";
            $decryptValues = explode('&', $rcvdString);
            $dataSize = sizeof($decryptValues);

            $data = [];
            foreach($decryptValues as $prop){
                $property = explode("=", $prop);
                $data[$property[0]] = $property[1];
            }

            $application = Application::find($data["order_id"]);
            $application->update([
                "tracking_id" => $data["tracking_id"],
                "bank_ref_no" => $data["bank_ref_no"],
                "order_status" => $data["order_status"],
            ]);

            return redirect("/payment/status/".$data["order_id"]);
        } 
        catch(Exception $e){}
    }

    public function status($id){
        $data = Application::find($id);
        return view('web.form.response', compact('data'));
    }

    public function encryptCC($plainText, $key)
    {
        $key = $this->hextobin(md5($key));
        $initVector = pack("C*", 0x00, 0x01, 0x02, 0x03, 0x04, 0x05, 0x06, 0x07, 0x08, 0x09, 0x0a, 0x0b, 0x0c, 0x0d, 0x0e, 0x0f);
        $openMode = openssl_encrypt($plainText, 'AES-128-CBC', $key, OPENSSL_RAW_DATA, $initVector);
        $encryptedText = bin2hex($openMode);
        return $encryptedText;
    }

    public function decryptCC($encryptedText, $key)
    {
        $key = $this->hextobin(md5($key));
        $initVector = pack("C*", 0x00, 0x01, 0x02, 0x03, 0x04, 0x05, 0x06, 0x07, 0x08, 0x09, 0x0a, 0x0b, 0x0c, 0x0d, 0x0e, 0x0f);
        $encryptedText = $this->hextobin($encryptedText);
        $decryptedText = openssl_decrypt($encryptedText, 'AES-128-CBC', $key, OPENSSL_RAW_DATA, $initVector);
        return $decryptedText;
    }

    public function pkcs5_padCC($plainText, $blockSize)
    {
        $pad = $blockSize - (strlen($plainText) % $blockSize);
        return $plainText . str_repeat(chr($pad), $pad);
    }

    public function hextobin($hexString)
    {
        $length = strlen($hexString);
        $binString = "";
        $count = 0;
        while ($count < $length) {
            $subString = substr($hexString, $count, 2);
            $packedString = pack("H*", $subString);
            if ($count == 0) {
                $binString = $packedString;
            } else {
                $binString .= $packedString;
            }

            $count += 2;
        }
        return $binString;
    }
}