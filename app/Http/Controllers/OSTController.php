<?php

namespace App\Http\Controllers;
use App\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Facades\Auth;
use OSTSdk;


class OSTController extends Controller
{

   public $params = array(
       "apiKey" => "f408cfc4ea458b2d6f2b10821ded8036",
       "apiSecret" => "e55f3d89d455e54b31b3d0ae59d7a2ca236923106ec36cef7cc8408e705b124c",
       "apiBaseUrl" => "https://api.ost.com/testnet/v2/"
   );
   public $configParams = array(
       "timeout" => 15
   );

    public function init()
    {


        $ostObj = new OSTSdk($this->params);
        $usersService = $ostObj->services->users;
        var_dump($usersService);
    }
    public function createUser(){
        $ostObj = new OSTSdk($this->params);
        $usersService = $ostObj->services->users;
        $createParams = array();
        $response = $usersService->create($createParams)->wait();
        echo json_encode($response, JSON_PRETTY_PRINT);
    }

    public function detailUser(){
        $ostObj = new OSTSdk($this->params);
        $usersService = $ostObj->services->users;
        $getParams = array();
        $getParams['user_id'] = 'a2cfc171-cbfa-4047-a285-5d60fe17f764';
        $response = $usersService->get($getParams)->wait();
        echo json_encode($response, JSON_PRETTY_PRINT);
    }

    public function userList(){
        $ostObj = new OSTSdk($this->params);

        $userService = $ostObj->services->users;
        $getParams = array();
        $response = $userService->getList($getParams)->wait();
        echo json_encode($response, JSON_PRETTY_PRINT);
    }

    public static function checkBalance(){
        $params = array(
            "apiKey" => "f408cfc4ea458b2d6f2b10821ded8036",
            "apiSecret" => "e55f3d89d455e54b31b3d0ae59d7a2ca236923106ec36cef7cc8408e705b124c",
            "apiBaseUrl" => "https://api.ost.com/testnet/v2/"
        );
        $ostObj = new OSTSdk($params);
        $balanceService = $ostObj->services->balances;
        $getParams = array();
        $getData =  User::where('id',Auth::id())->select('ost_id')->first();
        //echo $getdata;
        $getParams['user_id'] = $getData->ost_id;

        $response = $balanceService->get($getParams)->wait();
        $balance = $response['data']['balance']['available_balance'];
        return $balance / (10 ** 18);

    }
}
