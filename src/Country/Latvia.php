<?php

declare(strict_types=1);

namespace CountryHelper\Country;

class Latvia extends AbstractCountry
{
    /**
     * @param string $phone
     *
     * @return bool
     */
    public function validatePhone(string $phone): bool
    {
        return (bool) preg_match('/^371\d{8}$/ui', $phone);
    }
}
