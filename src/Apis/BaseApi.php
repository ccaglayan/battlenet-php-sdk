<?php


namespace BattleNetSdk\Apis;


use BattleNetSdk\Region\RegionInterface;

abstract class BaseApi
{
    /**
     * @var string
     */
    protected $apiKey;

    /**
     * @var RegionInterface
     */
    protected $region;

    public function __construct(RegionInterface $region, string $apiKey)
    {
        $this->apiKey = $apiKey;
        $this->region = $region;
    }
}