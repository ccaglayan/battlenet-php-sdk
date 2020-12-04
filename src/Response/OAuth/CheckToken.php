<?php


namespace BattleNetSdk\Response\OAuth;


class CheckToken
{

    /**
     * @var int
     */
    public $exp;

    /**
     * @var string
     */
    public $userName;

    /**
     * @var array
     */
    public $authorities;

    /**
     * @var string
     */
    public $clientId;

    /**
     * @var array
     */
    public $scope;

    /**
     * CheckToken constructor.
     * @param array $data
     */
    public function __construct(array $data = [])
    {
       $this->setExp($data['exp']);
       $this->setUserName($data['user_name']);
       $this->setAuthorities($data['authorities']);
       $this->setClientId($data['client_id']);
       $this->setScope($data['scope']);
    }

    /**
     * @return int
     */
    public function getExp() {
        return $this->exp;
    }

    /**
     * @param int $exp
     */
    public function setExp(int $exp) {
        $this->exp = $exp;
    }

    /**
     * @return string
     */
    public function getUserName() {
        return $this->userName;
    }

    /**
     * @param string $userName
     */
    public function setUserName(string $userName) {
        $this->userName = $userName;
    }

    /**
     * @return array
     */
    public function getAuthorities() {
        return $this->authorities;
    }

    /**
     * @param array $authorities
     */
    public function setAuthorities(array $authorities) {
        $this->authorities = $authorities;
    }

    /**
     * @return string
     */
    public function getClientId() {
        return $this->clientId;
    }

    /**
     * @param string $clientId
     */
    public function setClientId(string $clientId) {
        $this->clientId = $clientId;
    }

    /**
     * @return array
     */
    public function getScope() {
        return $this->scope;
    }

    /**
     * @param array $scope
     */
    public function setScope(array $scope) {
        $this->scope = $scope;
    }

}