<?php


namespace BattleNetSdk\Curl;


use BattleNetSdk\Exceptions\CurlException;

class Client
{
    /**
     * @var string
     */
    private $baseUrl;

    /**
     * @var string
     */
    private $requestUrl;

    /**
     * @var string
     */
    private $method;

    /**
     * @var array
     */
    private $sendData;

    /**
     * @var array
     */
    private $headerData = [];

    /**
     * @var array
     */
    private $requestInfo;

    /**
     * Client constructor.
     * @param string $baseUrl
     * @throws CurlException
     */
    public function __construct(string $baseUrl = '')
    {
        if(strlen($baseUrl) == 0)
            throw new CurlException('Base url not set');

        $this->baseUrl = $baseUrl;
    }

    /**
     * @param string $endpoint
     */
    public function setEndPoint(string $endpoint = '')
    {
        $this->requestUrl = $this->baseUrl.'/'.$endpoint;
    }

    /**
     * @param string $method
     * @throws CurlException
     */
    public function setMethod(string $method = '')
    {
        if(strlen($method) == 0)
            throw new CurlException('Method not set');

        $this->method = $method;
    }

    /**
     * @param array $data
     * @throws CurlException
     */
    public function setData(array $data = [])
    {
        if(!is_array($data))
            throw new CurlException('Send Data must Array');

        $this->sendData = $data;
    }

    /**
     * @param array $data
     * @throws CurlException
     */
    public function setHeader(array $data = [])
    {
        if(!is_array($data))
            throw new CurlException('Header Data must Array');

        if(count($this->headerData) > 0){
            $this->headerData = array_merge($this->headerData, $data);
        }else{
            $this->headerData = $data;
        }

    }

    /**
     * @param string $username
     * @param string $password
     * @throws CurlException
     */
    public function setBasicAuth(string $username, string $password)
    {
        $auth = 'Basic '.base64_encode($username.':'.$password);
        $headerData = ['Authorization: '.$auth];

        $this->setHeader($headerData);
    }

    /**
     * @return array
     * @throws CurlException
     */
    public function request() : array
    {
        $curl = curl_init();

        curl_setopt($curl, CURLOPT_URL, $this->requestUrl);

        if(count($this->headerData) > 0){
            curl_setopt($curl, CURLOPT_HTTPHEADER, $this->headerData);
        }

        if($this->method == 'POST'){
            curl_setopt($curl, CURLOPT_POST, 1);
            curl_setopt($curl, CURLOPT_POSTFIELDS, $this->sendData);
        }

        curl_setopt($curl, CURLOPT_RETURNTRANSFER, true);
        $output = curl_exec($curl);

        $this->requestInfo = curl_getinfo($curl);

        $response = json_decode($output, true);

        if($this->requestInfo['http_code'] != 200){
            $message = 'API Request Error';
            $errorType = null;
            if(isset($response['error_description'])){
                $message = 'API Request Error :'.$response['error_description'];
            }
            if(isset($response['error'])){
                $errorType = $response['error'];
            }

            throw new CurlException($message, $this->requestInfo['http_code'], null, $output, $errorType);
        }

        return json_decode($output, true);

    }
}