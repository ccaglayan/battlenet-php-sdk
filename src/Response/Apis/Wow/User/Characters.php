<?php


namespace BattleNetSdk\Response\Apis\Wow\User;


class Characters
{
    /**
     * @var Character
     */
    private $character;

    /**
     * @var ProtectedCharacter
     */
    private $protectedCharacter;

    /**
     * @var string
     */
    private $name;

    /**
     * @var int
     */
    private $id;

    /**
     * @var Realm
     */
    private $realm;

    /**
     * @var PlayableClass
     */
    private $playableClass;

    /**
     * @var PlayableRace
     */
    private $playableRace;

    /**
     * @var Gender
     */
    private $gender;

    /**
     * @var Faction
     */
    private $faction;

    /**
     * @var int
     */
    private $level;

    /**
     * Characters constructor.
     * @param array $data
     */
    public function __construct(array $data = [])
    {
        $this->setCharacter(new Character($data['character']));
        $this->setProtectedCharacter(new ProtectedCharacter($data['protected_character']));
        $this->setName($data['name']);
        $this->setId($data['id']);
        $this->setRealm(new Realm($data['realm']));
        $this->setPlayableClass(new PlayableClass($data['playable_class']));
        $this->setPlayableRace(new PlayableRace($data['playable_race']));
        $this->setGender(new Gender($data['gender']));
        $this->setFaction(new Faction($data['faction']));
    }

    /**
     * @return Character
     */
    public function getCharacter()
    {
        return $this->character;
    }

    /**
     * @param Character $character
     */
    public function setCharacter(Character $character)
    {
        $this->character = $character;
    }

    /**
     * @return ProtectedCharacter
     */
    public function getProtectedCharacter()
    {
        return $this->protectedCharacter;
    }

    /**
     * @param ProtectedCharacter $protectedCharacter
     */
    public function setProtectedCharacter(ProtectedCharacter $protectedCharacter)
    {
        $this->protectedCharacter = $protectedCharacter;
    }

    /**
     * @return string
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * @param string $name
     */
    public function setName(string $name)
    {
        $this->name = $name;
    }

    /**
     * @return int
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * @param int $id
     */
    public function setId(int $id)
    {
        $this->id = $id;
    }

    /**
     * @return Realm
     */
    public function getRealm()
    {
        return $this->realm;
    }

    /**
     * @param Realm $realm
     */
    public function setRealm(Realm $realm)
    {
        $this->realm = $realm;
    }

    /**
     * @return PlayableClass
     */
    public function getPlayableClass()
    {
        return $this->playableClass;
    }

    /**
     * @param PlayableClass $playableClass
     */
    public function setPlayableClass(PlayableClass $playableClass)
    {
        $this->playableClass = $playableClass;
    }

    /**
     * @return PlayableRace
     */
    public function getPlayableRace()
    {
        return $this->playableRace;
    }

    /**
     * @param PlayableRace $playableRace
     */
    public function setPlayableRace(PlayableRace $playableRace)
    {
        $this->playableRace = $playableRace;
    }

    /**
     * @return Gender
     */
    public function getGender()
    {
        return $this->gender;
    }

    /**
     * @param Gender $gender
     */
    public function setGender(Gender $gender)
    {
        $this->gender = $gender;
    }

    /**
     * @return Faction
     */
    public function getFaction()
    {
        return $this->faction;
    }

    /**
     * @param Faction $faction
     */
    public function setFaction(Faction $faction)
    {
        $this->faction = $faction;
    }

    /**
     * @return int
     */
    public function getLevel()
    {
        return $this->level;
    }

    /**
     * @param int $level
     */
    public function setLevel(int $level)
    {
        $this->level = $level;
    }
}