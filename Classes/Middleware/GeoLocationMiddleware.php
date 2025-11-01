<?php

declare(strict_types=1);

namespace Oussema\HideByCountries\Middleware;

use Psr\Http\Message\ResponseInterface;
use Psr\Http\Server\MiddlewareInterface;
use Psr\Http\Message\ServerRequestInterface;
use Psr\Http\Server\RequestHandlerInterface;
use Oussema\HideByCountries\Domain\Repository\GeoLocationRepository;
use Oussema\HideByCountries\Domain\Model\Dto\ExtConfiguration;

class GeoLocationMiddleware implements MiddlewareInterface
{
    private const COOKIE_NAME = 'user_country';
    private const COOKIE_LIFETIME = 31536000; // 1 year

    public function __construct(
        private readonly ExtConfiguration $extensionConfiguration,
        private readonly GeoLocationRepository $geoLocationRepository,
    ) {
    }
    public function process(ServerRequestInterface $request, RequestHandlerInterface $handler): ResponseInterface
    {
            $countryCode = $this->getCountryCode($request);
            $request = $request->withAttribute('country_code', $countryCode);
            $response = $handler->handle($request);

        if (isset($countryCode) && !empty($countryCode)) {
            $cookieValue = rawurlencode($countryCode);
            $expires = gmdate('D, d-M-Y H:i:s T', time() + self::COOKIE_LIFETIME);
            $cookieHeader = sprintf(
                '%s=%s; Expires=%s; Path=/; Secure; HttpOnly; SameSite=Lax',
                self::COOKIE_NAME,
                $cookieValue,
                $expires
            );

            $response = $response->withAddedHeader('Set-Cookie', $cookieHeader);
        }

        return $response;
    }

    private function getCountryCode(ServerRequestInterface $request): string
    {
        $cookieCountry = $request->getCookieParams()[self::COOKIE_NAME] ?? '';
        if ($cookieCountry !== '') {
            return $cookieCountry;
        }
        $ipAddress = $this->getClientIpAddress($request);
        return $this->geoLocationRepository->findCountryForIp($ipAddress);
    }

    private function getClientIpAddress(ServerRequestInterface $request): string
    {
        $devlopementMode = (bool)$this->extensionConfiguration->getDevelopemntMode();
        if ($devlopementMode) {
            return  $this->extensionConfiguration->getPublicIpAddressForTesting();
        }
        return $request->getServerParams()['REMOTE_ADDR'];
    }
}
