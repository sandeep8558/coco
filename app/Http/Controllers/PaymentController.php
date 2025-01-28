<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;

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

    public function paymentRequest(Request $request)
    {
        $input = $request->all();

        $input['currency'] = "INR";
        $input['redirect_url'] = "https://cocoschool.in/payment/response";
        $input['cancel_url'] = "https://cocoschool.in/payment/response";
        $input['language'] = "EN";
        $input['merchant_id'] = $this->merchantID;

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
        // return $request;
        // try {
        //     /* $encResponse = $_POST["encResp"];
        //     $rcvdString = $this->decryptCC($encResponse, $this->WorkingKey);
        //     $order_status = "";
        //     $decryptValues = explode('&', $rcvdString);
        //     $dataSize = sizeof($decryptValues);

        //     return redirect("/payment/result?data=".$rcvdString); */
        // } 
        // catch(Exception $e){}
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