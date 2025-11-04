..  include:: /Includes.rst.txt
..  highlight:: php

..  _developer:

================
Developer Corner
================

This section provides deeper insights into how **hidebycountries** works internally,  
and how developers can extend or integrate it into their own TYPO3 projects.

----

..  _developer_overview:

Extension Architecture
======================

The extension follows modern TYPO3 and PSR standards:

* **PSR-15 Middleware** – Intercepts frontend requests and determines the visitor’s country.
* **Event Listener** – Filters content elements before rendering.
* **Caching Framework Integration** – Caches IP-to-country lookups.
* **Extension Configuration** – Stores runtime behavior settings (no TypoScript needed).

A simplified overview:

..  code-block:: text

    Request → Middleware (GeoIP lookup)
             ↓
           Cache check (country by IP)
             ↓
           Event Listener → filters content element
             ↓
           Render visible CEs only

----

..  _developer_geoip_service:

Custom GeoIP Service
====================

You can replace the built-in GeoIP service with your own implementation —  
useful if you want to integrate a commercial provider such as **MaxMind**, **IP2Location**, or **ip-api.com**.

1. **Create a custom service class** that implements  
   ``Oussema\HideByCountries\Utility\Apis\GeoLocationApiInterface``.

   Example:

   ..  code-block:: php

       <?php

       declare(strict_types=1);

       namespace Vendor\Extension\Utility\Apis;

       use Oussema\HideByCountries\Utility\Apis\GeoLocationApiInterface;

       class CustomGeoService implements GeoLocationApiInterface
       {
           public function getCountryForIp(string $ipAddress): string
           {
               // Custom logic to return a 2-letter ISO country code (e.g. "DE", "FR")
               return 'DE';
           }
       }

2. **Register your service** in the TYPO3 Extension Configuration  
   by updating the `classNameSpace` setting:

   ..  code-block:: php

       \Vendor\Extension\Utility\Apis\CustomGeoService::class


Your service will now be automatically used by the middleware.

----

..  _developer_testing:

Testing and Debugging
=====================

To test behavior during development, enable **development mode**  
in the extension configuration and specify a test IP:

..  code-block:: php

    'developmentMode' => true,
    'publicIpAddressForTesting' => '8.8.8.8',

The middleware will use this fixed IP instead of the client’s actual address,  
allowing you to simulate different visitor countries easily.

You can monitor extension activity via the TYPO3 log:

..  code-block:: text

    [hidebycountries] IP resolved to country: US
    [hidebycountries] Content element hidden for visitor from US

----

..  seealso::

    * :ref:`Configuration <configuration>`
    * :ref:`Installation <installation>`
