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
        $getParams['user_id'] = 'ca59481c-4a5c-43a9-9907-97d93db32799';
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
        //var_dump($response);
        $balance = $response['data']['balance']['available_balance'];
        return $balance / (10 ** 18);

    }
    public function rewardUser(){

        $params = array();
        $params['apiKey']='f408cfc4ea458b2d6f2b10821ded8036';
        $params['apiSecret']='e55f3d89d455e54b31b3d0ae59d7a2ca236923106ec36cef7cc8408e705b124c';
        $params['apiBaseUrl']='https://api.ost.com/testnet/v2/';

//// The config field is optional
//$configParams = array();
//// Request timeout in seconds. Default is 10 seconds.
//$configParams["timeout"] = 15;
//$params["config"] = $configParams;
////
$ostObj = new OSTSdk($params);

$rulesService = $ostObj->services->rules;

$getParams = array();
//$response = $rulesService->getList($getParams)->wait();
//echo json_encode($response, JSON_PRETTY_PRINT);
      $transactionService = $ostObj->services->transactions;

// Direct Token Transfer
        $transferToAddresses = array("0xabbd719d2e01cbc922c73af9002841b48cf83d7d");

// Transfer amount in atto USD.
// In this example, we want to transfer 10 BT.
// Converting BT to atto BT: Multiply by 10^18
// atto BT = 10 * 10^18 = 10^19
        $transferAmounts = array("10000000000000000000");
        $raw = json_encode(array(
            'method' => 'directTransfers',

            // These are method parameters in rule contract
            'parameters' => array(
                // First array is of receiver's  TokenHolder  addresses
                array("0x81b8ba0babfc4d0ff56a1a52b5d1ae0a11139181"),

                // Second array is of receiver's amounts in atto
                // (10 Token = 10^19 atto)
                array("10000000000000000000")
            ))
        );
$executeParams = array(


    'user_id' => 'a9e40146-e19e-409f-addb-d393c2fcba8b',
    'to' => '0xabbd719d2e01cbc922c73af9002841b48cf83d7d', // address of directTransfer method obtained from TokenRules


    'raw_calldata' => $raw,

        'meta_property' => array(
            'details' => 'finished the first coarse',
            'type' => 'company_to_user',
            'name' => 'security 1 coarse'
        ),
);
$response = $transactionService->execute($executeParams)->wait();
//echo json_encode($response, JSON_PRETTY_PRINT);
        return view('/coarses/security1/9');

    }
}
