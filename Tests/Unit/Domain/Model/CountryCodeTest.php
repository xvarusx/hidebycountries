<?php

declare(strict_types=1);

namespace Oussema\HideByCountries\Tests\Unit\Domain\Model;

use Oussema\HideByCountries\Domain\Model\CountryCode;
use TYPO3\TestingFramework\Core\Unit\UnitTestCase;

class CountryCodeTest extends UnitTestCase
{
    public function testCountryCodeFormat(): void
    {

        $countryCodes = ['US', 'FR', 'DE', 'JP', 'IN', 'tn'];
        foreach ($countryCodes as $code) {
            self::assertMatchesRegularExpression('/^[A-Z]{2}$/', strtoupper($code), "Country code {$code} is not in the correct format.");
        }
    }
    public function testInvalidFormatThrows(): void
    {
        $this->expectException(\InvalidArgumentException::class);
        CountryCode::fromString('USA');
    }
    public function testEmptyCountryCodeThrows(): void
    {
        $this->expectException(\InvalidArgumentException::class);
        CountryCode::fromString('');
    }
}
