<?php


namespace BattleNetSdk\Region;


use BattleNetSdk\Exceptions\RegionException;

class EU implements RegionInterface
{
    /**
     * @var string[]
     */
    private static $langs = [
        RegionInterface::DE_DE,
        RegionInterface::EN_GB,
        RegionInterface::ES_ES,
        RegionInterface::IT_IT,
        RegionInterface::FR_FR,
        RegionInterface::PL_PL,
        RegionInterface::RU_RU,
        RegionInterface::PT_PT,
    ];

    /**
     * @var string
     */
    private $lang;

    /**
     * EU constructor.
     * @param string $lang
     * @throws RegionException
     */
    public function __construct($lang = RegionInterface::EN_GB)
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
        return 'https://eu.api.blizzard.com';
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
        return 'https://eu.battle.net';
    }
}