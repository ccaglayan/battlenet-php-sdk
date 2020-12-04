<?php


namespace BattleNetSdk\Response\Apis\Wow\User;

class Collection
{

    /**
     * @var string
     */
    public $href;

    /**
     * Collection constructor.
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