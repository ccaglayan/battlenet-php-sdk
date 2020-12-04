<?php


namespace BattleNetSdk\Response\OAuth;


class Token
{
    /**
     * @var string
     */
    public $accessToken;

    /**
     * @var int
     */
    public $expiresIn;

    /**
     * @var string
     */
    public $idToken;

    /**
     * @var string
     */
    public $scope;

    /**
     * @var string
     */
    public $tokenType;

    /**
     * Token constructor.
     * @param array $data
     */
    public function __construct(array $data = [])
    {
        $this->setToken($data['access_token']);
        $this->setTokenType($data['token_type']);
        $this->setExpiresIn($data['expires_in']);
        $this->setScope($data['scope']);
        $this->setIdToken($data['id_token']);
    }

    /**
     * @return string
     */
    public function getToken() {
        return $this->accessToken;
    }

    /**
     * @param string $accessToken
     */
    public function setToken(string $accessToken) {
        $this->accessToken = $accessToken;
    }

    /**
     * @return int
     */
    public function getExpiresIn() {
        return $this->expiresIn;
    }

    /**
     * @param int $expiresIn
     */
    public function setExpiresIn(int $expiresIn) {
        $this->expiresIn = $expiresIn;
    }

    /**
     * @return string
     */
    public function getIdToken() {
        return $this->idToken;
    }

    /**
     * @param string $idToken
     */
    public function setIdToken(string $idToken) {
        $this->idToken = $idToken;
    }

    /**
     * @return string
     */
    public function getScope() {
        return $this->scope;
    }

    /**
     * @param string $scope
     */
    public function setScope(string $scope) {
        $this->scope = $scope;
    }

    /**
     * @return string
     */
    public function getTokenType() {
        return $this->tokenType;
    }

    /**
     * @param string $tokenType
     */
    public function setTokenType(string $tokenType) {
        $this->tokenType = $tokenType;
    }
}