<?php


namespace BattleNetSdk\Response\Apis\Wow\User;

class ProtectedCharacter
{

    /**
     * @var string
     */
    public $href;

    /**
     * ProtectedCharacter constructor.
     * @param array $data
     */
    public function __construct(array $data = [])
    {
        $this->setHref($data['href']);
    }

    /**
     * @return string
     */
    public function getHref() { 
         return $this->href; 
    }

    /**
     * @param string $href
     */
    public function setHref(string $href) {
         $this->href = $href; 
    }    

}