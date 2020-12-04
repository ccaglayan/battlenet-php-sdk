<?php


namespace BattleNetSdk\Response\Apis\Wow\User;

class WowAccounts
{

    /**
     * @var array
     */
    public $characters;

    /**
     * @var int
     */
    public $id;

    public function __construct(array $data = [])
    {
        $this->setId($data['id']);
        $this->setCharacters($data['characters']);
    }

    /**
     * @return array
     */
    public function getCharacters() { 
         return $this->characters; 
    }

    /**
     * @param array $characters
     */
    public function setCharacters(array $characters) {
        foreach ($characters as $character){
            $this->characters[] =  new Characters($character);
        }
    }

    /**
     * @return int
     */
    public function getId() { 
         return $this->id; 
    }

    /**
     * @param int $id
     */
    public function setId(int $id) {
         $this->id = $id; 
    }    

}