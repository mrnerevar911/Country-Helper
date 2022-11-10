<?php

require_once __DIR__ . '/vendor/autoload.php';

use CountryHelper\CountryHelper;

$countryHelper = new CountryHelper(CountryHelper::RUSSIA);

$true = $countryHelper->country->validatePhone('79876543210');
echo $true . PHP_EOL;

$false = $countryHelper->country->validatePhone('798765432101');
echo $false . PHP_EOL;

