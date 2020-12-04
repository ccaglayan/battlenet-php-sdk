<?php


namespace BattleNetSdk\Region;


use BattleNetSdk\Exceptions\RegionException;

class US implements RegionInterface
{

    /**
     * @var string[]
     */
    private static $langs = [
        RegionInterface::EN_US,
        RegionInterface::ES_MX,
        RegionInterface::PT_BR,
    ];

    /**
     * @var string
     */
    private $lang;

    /**
     * US constructor.
     * @param string $lang
     * @throws RegionException
     */
    public function __construct($lang = RegionInterface::EN_US)
    {
        if(!in_array($lang, self::$langs)){
            throw new RegionException('Wrong Region');
        }

        $this->lang = $lang;
    }

    /**
     * @inheritDoc
     */
    public function getBaseUrl(): string
    {
        return 'https://us.api.blizzard.com';
    }

    /**
     * @inheritDoc
     */
    public function getLocale(): string
    {
        return $this->lang;
    }

    /**
     * @inheritDoc
     */
    public function getName(): string
    {
        return 'EU';
    }

    /**
     * @inheritDoc
     */
    public function getLowerName(): string
    {
        return strtolower($this->getName());
    }

    /**
     * @inheritDoc
     */
    public function getOAuthBaseUrl(): string
    {
        return 'https://us.battle.net';
    }
}