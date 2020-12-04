<?php


namespace BattleNetSdk\OAuth2;


use BattleNetSdk\Exceptions\CurlException;
use BattleNetSdk\Exceptions\OAuthException;
use BattleNetSdk\Region\RegionInterface;
use BattleNetSdk\Response\OAuth\CheckToken;
use BattleNetSdk\Response\OAuth\Token;

class Client
{

    /**
     * @var RegionInterface
     */
    protected $region;

    /**
     * @var array
     */
    protected $options;

    /**
     * Client constructor.
     * @param array $options
     * @throws OAuthException
     */
    public function __construct(array $options = [])
    {

        if (!array_key_exists('region', $options) ||
            !$options['region'] instanceof RegionInterface) {

            throw new OAuthException('Missing required option "region"');
        }
        /**
         * @var $region RegionInterface
         */
        $region = $options['region'];
        unset($options['region']);

        $this->region = $region;
        $this->options = $options;

    }

    public function generateAuthUrl(string $state = '')
    {
        $query = [
            ':region' => $this->region->getLowerName(),
            'response_type' => 'code',
            'client_id' => $this->options['clientId'],
            'redirect_uri' => $this->options['redirectUri'],
            'scope' => implode('+',$this->options['scope']),
        ];

        if(strlen($state) > 0){
            $query['state'] = $state;
        }

        return $this->region->getOAuthBaseUrl().'/oauth/authorize?'.http_build_query($query);
    }

    /**
     * @param string $code
     * @return Token
     * @throws OAuthException
     */
    public function getToken(string $code) : Token
    {
        $params = [
            ':region' => $this->region->getLowerName(),
            'grant_type' => 'authorization_code',
            'code' => $code,
            'redirect_uri' => $this->options['redirectUri'],
            'client_id' => $this->options['clientId']
        ];


        try{
            $client = new \BattleNetSdk\Curl\Client($this->region->getOAuthBaseUrl());

            $client->setEndPoint('/oauth/token');
            $client->setMethod('POST');
            $client->setData($params);
            $client->setBasicAuth($this->options['clientId'], $this->options['clientSecret']);

            return new Token($client->request());

        }catch (CurlException $e){
            throw new OAuthException('Curl Exception: '.$e->getMessage(), $e->getCode(), null, $e->getResponse());
        }
    }

    /**
     * @param $token
     * @return CheckToken
     * @throws OAuthException
     */
    public function checkToken($token) : CheckToken
    {
        $params = [
            ':region' => $this->region->getLowerName(),
            'token' => $token
        ];

        try{

            $client = new \BattleNetSdk\Curl\Client($this->region->getOAuthBaseUrl());
            $client->setEndPoint('/oauth/check_token');
            $client->setMethod('POST');
            $client->setData($params);

            return new CheckToken($client->request());
        }catch (CurlException $e){
            throw new OAuthException('Curl Exception: '.$e->getMessage(), $e->getCode(), null, $e->getResponse());
        }
    }
}