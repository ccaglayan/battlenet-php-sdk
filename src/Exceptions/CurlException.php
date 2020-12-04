<?php


namespace BattleNetSdk\Exceptions;


use Throwable;

class CurlException extends \Exception
{

    /**
     * @var string|null
     */
    private $response = null;

    /**
     * @var string|null
     */
    private $type = null;

    /**
     * CurlException constructor.
     * @param string $message
     * @param int $code
     * @param Throwable|null $previous
     * @param string|null $response
     * @param string|null $type
     */
    public function __construct($message = '', $code = 0, Throwable $previous = null, string $response = null, ?string $type = null)
    {
        parent::__construct($message, $code, $previous);

        if(!is_null($response))
            $this->response = $response;

        if(!is_null($type))
            $this->type = $type;
    }

    /**
     * @return string|null
     */
    public function getResponse()
    {
        return $this->response;
    }

    /**
     * @return string|null
     */
    public function getType()
    {
        return $this->type;
    }
}