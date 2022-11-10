<?php

declare(strict_types=1);

namespace CountryHelper\Country;

interface InterfaceCountry
{
    /**
     * @param string $phone
     *
     * @return bool
     */
    public function validatePhone(string $phone): bool;
}
