<?php


namespace BattleNetSdk\Response\Apis\Wow\User;

class Faction
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
     * Faction constructor.
     * @param array $data
     */
    public function __construct(array $data = [])
    {
        $this->setName($data['name']);
        $this->setType($data['type']);
    }

    public function getName() { 
         return $this->name; 
    }
    public function setName(string $name) {
         $this->name = $name; 
    }    
    public function getType() { 
         return $this->type; 
    }
    public function setType(string $type) {
         $this->type = $type; 
    }    

}