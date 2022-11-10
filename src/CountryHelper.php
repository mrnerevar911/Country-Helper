<?php

declare(strict_types=1);

namespace CountryHelper;

use CountryHelper\Country\interfaceCountry;
use CountryHelper\Country\Latvia;
use CountryHelper\Country\Russia;
use Exception;

/**
 * Class CountryHelper
 */
class CountryHelper
{
    public interfaceCountry $country;

    public const RUSSIA = 'RU';
    public const LATVIA = 'LV';

    private const COUNTRIES_LIST = [
        self::RUSSIA => Russia::class,
        self::LATVIA => Latvia::class,
    ];

    /**
     * @param string $code
     *
     * @throws Exception
     */
    public function __construct(string $code)
    {
        if (!isset(self::COUNTRIES_LIST[$code])) {
            throw new Exception('Страна не поддерживается');
        }

        $class = $this->getCountryByCode($code);
        $this->country = new $class();
    }

    /**
     * @param string $code
     *
     * @return string
     */
    private function getCountryByCode(string $code): string
    {
        return self::COUNTRIES_LIST[$code];
    }

    /**
     * @return interfaceCountry
     */
    public function country(): interfaceCountry
    {
        return $this->country;
    }
}
