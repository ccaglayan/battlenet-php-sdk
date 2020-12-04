<?php


namespace BattleNetSdk\Exceptions;


use Throwable;

class OAuthException extends \Exception
{
    private $response;

    /**
     * OAuthException constructor.
     * @param string $message
     * @param int $code
     * @param Throwable|null $previous
     * @param string|null $response
     */
    public function __construct($message = '', $code = 0, Throwable $previous = null, string $response = null)
    {
        parent::__construct($message, $code, $previous);

        if(!is_null($response))
            $this->response = $response;
    }

    public function getResponse()
    {
        return $this->response;
    }
}