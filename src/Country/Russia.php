<?php

declare(strict_types=1);

namespace CountryHelper\Country;

class Russia extends AbstractCountry
{
    /**
     * @param string $phone
     *
     * @return bool
     */
    public function validatePhone(string $phone): bool
    {
        return (bool) preg_match('/^7\d{10}$/ui', $phone);
    }
}
