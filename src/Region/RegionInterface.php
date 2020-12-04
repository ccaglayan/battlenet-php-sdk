<?php


namespace BattleNetSdk\Region;


interface RegionInterface
{
    /**
     * German (Latin, Germany).
     */
    const DE_DE = 'de_DE';

    /**
     * English (Latin, United Kingdom).
     */
    const EN_GB = 'en_GB';

    /**
     * English (Latin, United States).
     */
    const EN_US = 'en_US';

    /**
     * Spanish (Latin, Spain).
     */
    const ES_ES = 'es_ES';

    /**
     * Spanish (Latin, Mexico).
     */
    const ES_MX = 'es_MX';

    /**
     * French (Latin, France).
     */
    const FR_FR = 'fr_FR';

    /**
     * Italian (Latin, Italy).
     */
    const IT_IT = 'it_IT';

    /**
     * Korean (Korean, South Korea).
     */
    const KO_KR = 'ko_KR';

    /**
     * Polish (Latin, Poland).
     */
    const PL_PL = 'pl_PL';

    /**
     * Portuguese (Latin, Brazil).
     */
    const PT_BR = 'pt_BR';

    /**
     * Portuguese (Latin, Portugal).
     */
    const PT_PT = 'pt_PT';

    /**
     * Russian (Cyrillic, Russia).
     */
    const RU_RU = 'ru_RU';

    /**
     * Chinese (Simplified, China).
     */
    const ZH_CN = 'zh_CN';

    /**
     * @return string
     */
    public function getBaseUrl(): string;

    /**
     * @return string
     */
    public function getLocale(): string;

    /**
     * @return string
     */
    public function getName(): string;

    /**
     * @return string
     */
    public function getLowerName(): string;

    /**
     * @return string
     */
    public function getOAuthBaseUrl(): string;
}