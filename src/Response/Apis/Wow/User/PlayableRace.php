<?php


namespace BattleNetSdk\Response\Apis\Wow\User;

class PlayableRace
{

    /**
     * @var int
     */
    public $id;

    /**
     * @var Key
     */
    public $key;

    /**
     * @var string
     */
    public $name;

    /**
     * PlayableRace constructor.
     * @param array $data
     */
    public function __construct(array $data = [])
    {
        $this->setId($data['id']);
        $this->setName($data['name']);
        $this->setKey(new Key($data['key']));
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

    /**
     * @return Key
     */
    public function getKey() { 
         return $this->key; 
    }

    /**
     * @param Key $key
     */
    public function setKey(Key $key) {
         $this->key = $key; 
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

}