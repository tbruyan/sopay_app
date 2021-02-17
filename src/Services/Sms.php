<?php

namespace App\Services;

use GuzzleHttp\Client;
use Symfony\Component\DependencyInjection\ContainerAware;
use Csa\Bundle\GuzzleBundle\HttpFoundation\StreamResponse;

class Sms
{
	private $smsClient;
	
	public function __construct(Client $smsClient)
	{
		$this->smsClient = $smsClient;
	}

	public function sendSms($contact, $message)
	{
		if((int)$contact[1] == 9 || ((int)$contact[1] == 5 && (int)$contact[2] >= 5))
		{
          $operator = 'o';
        }
        elseif((int)$contact[1]==7 || ((int)$contact[1] == 5 && (int)$contact[2] >= 0 && (int)$contact[2] < 5))
        {
          $operator = 'm';
        }
        else
        {
        	$operator = 'n';
        }

		$uri = '/'.$operator.'/add/mls9876Toxpiment/'.$contact.'/'.$message;
			try{
				$response = $this->smsClient->get($uri);
			}catch(\Exception $e){
				return array('error' => 'The systeme returned and error: '.$e->getMessage());
			}
			
		return new StreamResponse($response);
	}

}