<?php


namespace BattleNetSdk\Response\Apis\Wow\User;

class GetProfile
{

    /**
     * @var Collection
     */
    public $collections;
    /**
     * @var int
     */
    public $id;

    /**
     * @var WowAccounts
     */
    public $wowAccounts;

    public function __construct(array $data = [])
    {
        $this->setId($data['id']);
        $this->setWowAccounts($data['wow_accounts']);
        $this->setCollections(new Collection($data['collections']));
    }

    /**
     * @return Collection
     */
    public function getCollections() { 
         return $this->collections; 
    }

    /**
     * @param Collection $collections
     */
    public function setCollections(Collection $collections) {
         $this->collections = $collections; 
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
     * @return WowAccounts
     */
    public function getWowAccounts() {
         return $this->wowAccounts; 
    }

    /**
     * @param array $wowAccounts
     */
    public function setWowAccounts(array $wowAccounts) {
        foreach ($wowAccounts as $wowAccount){
            $this->wowAccounts[] = new WowAccounts($wowAccount);
        }
    }    

}