<?php

namespace App\Services;

use GuzzleHttp\Client;
use GuzzleHttp\RequestOptions;
use Symfony\Component\DependencyInjection\ContainerAware;
use Csa\Bundle\GuzzleBundle\HttpFoundation\StreamResponse;

class Sopay
{
	private $sopayClient;
	
	public function __construct(Client $sopayClient)
	{
		$this->sopayClient = $sopayClient;
	}

	public function convert($amount, $currency, $outCurrency)
	{
		if($outCurrency != null){
			$uri = '/payment/public/index.php/convert?amount='.$amount.'&devise='.$currency.'&out='.$outCurrency;
		}else{
			$uri = '/payment/public/index.php/convert?amount='.$amount.'&devise='.$currency;
		}
		try{
			$response = $this->sopayClient->get($uri);
			}catch(\Exception $e){
				return array('error' => 'The systeme returned and error: '.$e->getMessage());
			}
		return  $response->getBody()->getContents();
	}

	public function confirmSms($number, $smscode, $token)
	{
		$uri = '/payment/public/index.php/api/agent/confirm-sms?code='.$smscode.'&number='.$number;
		$header = ['Authorization' => 'Bearer '.$token];
		try{
			$response = $this->sopayClient->get($uri, array('headers' => $header));
			}catch(\Exception $e){
				return array('error' => 'The systeme returned and error: '.$e->getMessage());
			}
		return  $response->getBody()->getContents();
	}

	public function connect($email, $password){
		$uri = '/payment/public/index.php/api/user/login_check';
		$data = ['email'=> $email, 'password'=> $password];
		try{
			$response = $this->sopayClient->post($uri, array(RequestOptions::JSON=>$data));
			}catch(\Exception $e){
				return array('error' => 'The systeme returned and error: '.$e->getMessage());
			}
		return  $response->getBody()->getContents();
	}

	public function createUser($type, $username, $password, $email, $contact, $fullname, $callback, $referer, $uuid, $osName, $browser, $host){
		//if($type == "Agent"){
		//	$uri = "/api/agent/create-agent?host=".$host;
		//	$data = ['username'=> $username, 'pass'=> $password, 'email' => $email, 'contact' => $contact, 'fullname' => $fullname, 'callback' => $callback];
		//}else{
			if(!is_null($referer)){
				$uri = "/payment/public/index.php/create-user?r=".$referer."&uuid=".$uuid."&os=".$osName."&br=".$browser."&host=".$host;
			}else{
				$uri = "/payment/public/index.php/create-user?host=".$host."&uuid=".$uuid."&os=".$osName."&br=".$browser;
			}
			$data = ['username'=> $username, 'pass'=> $password, 'email' => $email, 'contact' => $contact, 'signup_mode' => $type];
		//}
		try{
			$response = $this->sopayClient->post($uri, array(RequestOptions::JSON=>$data));
			}catch(\Exception $e){
				return array('error' => 'The systeme returned and error: '.$e->getMessage());
			}
		return  $response->getBody()->getContents();
	}

	public function getUser($email, $token, $host, $uuid, $os, $browser){
		$uri = "/payment/public/index.php/api/user/sopay-user/".$email.'?host='.$host.'&uuid='.$uuid.'&os='.$os.'&br='.$browser;
		$header = ['Authorization' => 'Bearer '.$token];
		try{
			$response = $this->sopayClient->get($uri, array('headers' => $header));
			}catch(\Exception $e){
				return array('error' => 'The systeme returned and error: '.$e->getMessage());
			}
		return  $response->getBody()->getContents();
	}

	public function getApiKey($token){
		$uri = "/payment/public/index.php/api/agent/get-apikey";
		$header = ['Authorization' => 'Bearer '.$token];
		try{
			$response = $this->sopayClient->get($uri, array('headers' => $header));
			}catch(\Exception $e){
				return array('error' => 'The systeme returned and error: '.$e->getMessage());
			}
		return  $response->getBody()->getContents();
	}

	public function getReferral($token){
		$uri = "/payment/public/index.php/api/user/list-referral";
		$header = ['Authorization' => 'Bearer '.$token];
		try{
			$response = $this->sopayClient->get($uri, array('headers' => $header));
			}catch(\Exception $e){
				return array('error' => 'The systeme returned and error: '.$e->getMessage());
			}
		return  $response->getBody()->getContents();
	}

	public function editUser($matricule, $callback, $fullname, $email, $contact, $token){
		$uri = "/payment/public/index.php/api/user/edit-user/".$matricule;
		$header = ['Authorization' => 'Bearer '.$token];
		$data = ['callback'=> $callback, 'fullname'=> $fullname, 'email'=>$email, 'contact'=>$contact];
		try{
			$response = $this->sopayClient->put($uri, array('headers' => $header, RequestOptions::JSON=>$data));
			}catch(\Exception $e){
				return array('error' => 'The systeme returned and error: '.$e->getMessage());
			}
		return  $response->getBody()->getContents();
	}

	public function updatePassword($matricule, $pass, $token){
		$uri = "/payment/public/index.php/api/user/update-password/".$matricule;
		$header = ['Authorization' => 'Bearer '.$token];
		$data = ['pass'=> $pass];
		try{
			$response = $this->sopayClient->put($uri, array('headers' => $header, RequestOptions::JSON=>$data));
			}catch(\Exception $e){
				return array('error' => 'The systeme returned and error: '.$e->getMessage());
			}
		return  $response->getBody()->getContents();
	}

	public function withdrawRewards($amount, $token){
		$uri = "/payment/public/index.php/api/user/withdraw-rewards?amount=".$amount;
		$header = ['Authorization' => 'Bearer '.$token];
		try{
			$response = $this->sopayClient->get($uri, array('headers' => $header));
			}catch(\Exception $e){
				return array('error' => 'The systeme returned and error: '.$e->getMessage());
			}
		return  $response->getBody()->getContents();
	}

	public function transfert($amount, $receiver, $token){
		$uri = "/payment/public/index.php/api/user/transfert";
		$data = ['amount' => $amount];
		$header = ['Authorization' => 'Bearer '.$token, 'operation' => '5', 'receiver' => $receiver];
		try{
			$response = $this->sopayClient->post($uri, array('headers' => $header, RequestOptions::JSON=>$data));
			}catch(\Exception $e){
				return array('error' => 'The systeme returned and error: '.$e->getMessage());
			}
		return  $response->getBody()->getContents();
	}

	public function defaultCurrency($currency, $token){
		$uri = "/payment/public/index.php/api/user/default-currency?code=".$currency;
		$header = ['Authorization' => 'Bearer '.$token];
		try{
			$response = $this->sopayClient->get($uri, array('headers' => $header));
			}catch(\Exception $e){
				return array('error' => 'The systeme returned and error: '.$e->getMessage());
			}
		return  $response->getBody()->getContents();
	}

	public function verifPay($amount, $ref, $payId, $token){
		$uri = "/payment/public/index.php/api/agent/verif-pay?amount=".$amount."&ref=".$ref."&payId=".$payId;
		$header = ['Authorization' => 'Bearer '.$token];
		try{
			$response = $this->sopayClient->get($uri, array('headers' => $header));
			}catch(\Exception $e){
				return array('error' => 'The systeme returned and error: '.$e->getMessage());
			}
		return  $response->getBody()->getContents();
	}

	public function getServices(){
		$uri = "/payment/public/index.php/services-list";
		try{
			$response = $this->sopayClient->get($uri);
			}catch(\Exception $e){
				return array('error' => 'The systeme returned and error: '.$e->getMessage());
			}
		return  $response->getBody()->getContents();
	}

	public function getOperations(){
		$uri = "/payment/public/index.php/operations-list";
		try{
			$response = $this->sopayClient->get($uri);
			}catch(\Exception $e){
				return array('error' => 'The systeme returned and error: '.$e->getMessage());
			}
		return  $response->getBody()->getContents();
	}

	public function getCurrency(){
		$uri = "/payment/public/index.php/currency-list";
		try{
			$response = $this->sopayClient->get($uri);
			}catch(\Exception $e){
				return array('error' => 'The systeme returned and error: '.$e->getMessage());
			}
		return  $response->getBody()->getContents();
	}

	public function getBill($id, $status, $total, $token)
	{
		if(!is_null($id)){
			$uri = '/payment/public/index.php/api/agent/bills/'.$id;
		}elseif(!is_null($status) && is_null($total)){
			$uri = '/payment/public/index.php/api/agent/bills?status='.$status;
		}elseif(is_null($status) && !is_null($total)){
			$uri = '/payment/public/index.php/api/agent/bills?total';
		}elseif(!is_null($status) && !is_null($total)){
			$uri = '/payment/public/index.php/api/agent/bills?total&status='.$status;
		}else{
			$uri = '/payment/public/index.php/api/agent/bills';
		}
		$header = ['x-api-key' => $token];
		try{
			$response = $this->sopayClient->get($uri, array('headers' => $header));
		}catch(\Exception $e){
			return array('error' => 'The systeme returned and error: '.$e->getMessage());
		}
		return  $response->getBody()->getContents();
	}

	public function getChanges($id, $status, $total, $token)
	{
		if(!is_null($id)){
			$uri = '/payment/public/index.php/api/user/changes/'.$id;
		}elseif(!is_null($status) && is_null($total)){
			$uri = '/payment/public/index.php/api/user/changes?status='.$status;
		}elseif(is_null($status) && !is_null($total)){
			$uri = '/payment/public/index.php/api/user/changes?total';
		}elseif(!is_null($status) && !is_null($total)){
			$uri = '/payment/public/index.php/api/user/changes?total&status='.$status;
		}else{
			$uri = '/payment/public/index.php/api/user/changes';
		}
		$header = ['Authorization' => 'Bearer '.$token];
		try{
			$response = $this->sopayClient->get($uri, array('headers' => $header));
		}catch(\Exception $e){
			return array('error' => 'The systeme returned and error: '.$e->getMessage());
		}
		return  $response->getBody()->getContents();
	}

	public function getProceeds($id, $status, $total, $token)
	{
		if(!is_null($id)){
			$uri = '/payment/public/index.php/api/user/proceeds/'.$id;
		}elseif(!is_null($status) && is_null($total)){
			$uri = '/payment/public/index.php/api/user/proceeds?status='.$status;
		}elseif(is_null($status) && !is_null($total)){
			$uri = '/payment/public/index.php/api/user/proceeds?total';
		}elseif(!is_null($status) && !is_null($total)){
			$uri = '/payment/public/index.php/api/user/proceeds?total&status='.$status;
		}else{
			$uri = '/payment/public/index.php/api/user/proceeds';
		}
		$header = ['Authorization' => 'Bearer '.$token];
		try{
			$response = $this->sopayClient->get($uri, array('headers' => $header));
		}catch(\Exception $e){
			return array('error' => 'The systeme returned and error: '.$e->getMessage());
		}
		return  $response->getBody()->getContents();
	}

	public function transact($amount, $number, $operation, $service, $otp, $token)
	{
		$uri = '/payment/public/index.php/api/user/proceeds';
		$data = ['amount' => $amount, 'wallet' => $number];
		$header = ['Authorization' => 'Bearer '.$token, 'operation' => $operation, 'service' => $service, 'otp' => $otp];
		try{
			$response = $this->sopayClient->post($uri, array('headers' => $header, RequestOptions::JSON=>$data));
		}catch(\Exception $e){
			return array('error' => 'The systeme returned and error: '.$e->getMessage());
		}
		return  $response->getBody()->getContents();
	}

	public function changes($amount, $inWallet, $outWallet, $inService, $outService, $operation, $otp, $token)
	{
		$uri = '/payment/public/index.php/api/user/changes';
		$data = ['in_amount' => $amount,  'in_wallet' => $inWallet,  'out_wallet' => $outWallet];
		$header = ['Authorization' => 'Bearer '.$token, 'operation' => $operation, 'inService' => $inService, 'outService' => $outService, 'otp' => $otp];
		try{
			$response = $this->sopayClient->post($uri, array('headers' => $header, RequestOptions::JSON=>$data));
		}catch(\Exception $e){
			return array('error' => 'The systeme returned and error: '.$e->getMessage());
		}
		return  $response->getBody()->getContents();
	}

	public function getHistory($type, $period, $token){
		if(!$period && !$type){
			$uri = "/payment/public/index.php/api/user/histories";
		}elseif(!$type){
			$uri = "/payment/public/index.php/api/user/histories?period=".$period;
		}elseif(!$period){
			$uri = "/payment/public/index.php/api/user/histories?type=".$type;
		}else{
			$uri = "/payment/public/index.php/api/user/histories?period=".$period."&type=".$type;
		}
		$header = ['Authorization' => 'Bearer '.$token];
		try{
			$response = $this->sopayClient->get($uri, array('headers' => $header));
			}catch(\Exception $e){
				return array('error' => 'The systeme returned and error: '.$e->getMessage());
			}
		return  $response->getBody()->getContents();
	}

	public function forgotPassword($email){
		
		$uri = "/payment/public/index.php/forgotten-password?email=".$email;
		try{
			$response = $this->sopayClient->get($uri);
			}catch(\Exception $e){
				return array('error' => 'The systeme returned and error: '.$e->getMessage());
			}
		return  $response->getBody()->getContents();
	}

	public function ressetPassword($token, $password){
		
		$uri = "/payment/public/index.php/reset-password?token=".$token."&password=".$password;
		try{
			$response = $this->sopayClient->get($uri);
			}catch(\Exception $e){
				return array('error' => 'The systeme returned and error: '.$e->getMessage());
			}
		return  $response->getBody()->getContents();
	}

	public function getTransaction($document, $token){
		
		$uri = "/payment/public/index.php/api/user/history/".$document;
		
		$header = ['Authorization' => 'Bearer '.$token];
		try{
			$response = $this->sopayClient->get($uri, array('headers' => $header));
			}catch(\Exception $e){
				return array('error' => 'The systeme returned and error: '.$e->getMessage());
			}
		return  $response->getBody()->getContents();
	}

	public function getOutValue($amount, $inService, $outService, $token){
		
		$uri = "/payment/public/index.php/api/user/get-out-value?amount=".$amount.'&in='.$inService.'&out='.$outService;
		
		$header = ['Authorization' => 'Bearer '.$token];
		try{
			$response = $this->sopayClient->get($uri, array('headers' => $header));
			}catch(\Exception $e){
				return array('error' => 'The systeme returned and error: '.$e->getMessage());
			}
		return  $response->getBody()->getContents();
	}

	public function addDevise($token, $uuid, $osName, $browser, $host){
		
		$uri = "/payment/public/index.php/add-new-devise?token=".$token."&uuid=".$uuid."&os=".$osName."&br=".$browser."&host=".$host;
		try{
			$response = $this->sopayClient->get($uri);
			}catch(\Exception $e){
				return array('error' => 'The systeme returned and error: '.$e->getMessage());
			}
		return  $response->getBody()->getContents();
	}

	public function confirmAccount($token){
		
		$uri = "/payment/public/index.php/confirm-account?token=".$token;
		try{
			$response = $this->sopayClient->get($uri);
			}catch(\Exception $e){
				return array('error' => 'The systeme returned and error: '.$e->getMessage());
			}
		return  $response->getBody()->getContents();
	}
}