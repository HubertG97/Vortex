<?php

namespace App\Http\Controllers;

use App\User;
use Illuminate\Http\Request;
use Google2FA;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class SecurityCoarseController extends Controller
{
    public $secretKey;
    public $QR_Image;
    public function index($page){
        if ($page = 1){
            return view('/coarses/security1/1');
        }

        return 0;
    }

    public function nextPage(){
        return view('/coarses/security1/2');
    }

    public function generate2FA()
    {
        //Validate the incoming request using the already included validator method
        //$this->validator($request->all())->validate();

        // Initialise the 2FA class
        $google2fa = app('pragmarx.google2fa');

        // Save the registration data in an array


        // Add the secret key to the registration data
        $this->secretKey = $google2fa->generateSecretKey();

        // Save the registration data to the user session for just the next request
        User::where('id', Auth::id())->update(array('2fa_secret' => $this->secretKey));


        // Generate the QR image. This is the image the user will scan with their app
        // to set up two factor authentication
        $this->QR_Image = $google2fa->getQRCodeInline(
            config('app.name'),
            Auth::user()->email,
            $this->secretKey
        );

        // Pass the QR barcode image to our view
        return view('/coarses/security1/5', ['QR_Image' => $this->QR_Image], ['secret' => $this->secretKey]);
    }
    public function confirmKey(){
        User::where('id', Auth::id())->update(array('2fa_confirmed' => true));
        return view('/coarses/security1/8');

    }
    public function returnKey() {
        $secretKey = User::where('id', Auth::id())->value('2fa_secret');

        return view('/coarses/security1/6', ['secret' => $secretKey]);
    }

}

