<?php


namespace BattleNetSdk\Response\Apis\Wow\User;

class Gender
{

    /**
     * @var string
     */
    public $name;

    /**
     * @var string
     */
    public $type;

    /**
     * Gender constructor.
     * @param array $data
     */
    public function __construct(array $data = [])
    {
        $this->setName($data['name']);
        $this->setType($data['type']);
    }

    /**
     * @return string
     */
    public function getName() { 
         return $this->name; 
    }

    /**
     * @param string $name
     */
    public function setName(string $name) {
         $this->name = $name; 
    }

    /**
     * @return string
     */
    public function getType() { 
         return $this->type; 
    }

    /**
     * @param string $type
     */
    public function setType(string $type) {
         $this->type = $type; 
    }    

}