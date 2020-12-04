<?php


namespace BattleNetSdk\Apis\Wow;


use BattleNetSdk\Apis\BaseApi;
use BattleNetSdk\Curl\Client;
use BattleNetSdk\Exceptions\CurlException;
use BattleNetSdk\Response\Apis\Wow\User\GetProfile;

class User extends BaseApi
{

    public function getProfile()
    {
        $params = [
            'namespace' => 'profile-'.$this->region->getLowerName(),
            'locale' => $this->region->getLocale(),
            'access_token' => $this->apiKey
        ];
        try{
            $client = new Client($this->region->getBaseUrl());
            $client->setEndPoint('profile/user/wow');
            $client->setMethod('GET');
            $client->setData($params);

            return new GetProfile($client->request());


        }catch (CurlException $e){
            echo $e->getResponse();
            echo $e->getMessage();
            //TODO exception
        }
    }
}