..  include:: /Includes.rst.txt

..  _configuration:

=============
Configuration
=============

The **hidebycountries** extension allows you to control how country detection and content visibility behave in your TYPO3 instance.  
All settings are managed via the **Extension Configuration**—no TypoScript is required.

----

..  _configuration_backend:

Extension Configuration
=======================

Open **Admin Tools → Settings → Extension Configuration → hidebycountries**  
to configure the available options.

The following table lists all supported options:

+--------------------------------+-------------------------------------------------------------+---------------------------+
| **Option**                     | **Description**                                             | **Default**               |
+================================+=============================================================+===========================+
| ``developmentMode``            | Enables testing mode using a fixed IP instead of client IP. | ``1`` (enabled)           |
+--------------------------------+-------------------------------------------------------------+---------------------------+
| ``publicIpAddressForTesting``  | IP address used when development mode is active.            | ``234.162.28.227``        |
+--------------------------------+-------------------------------------------------------------+---------------------------+
| ``classNameSpace``             | Fully-qualified class name of the GeoIP service.            | ``\Oussema\HideByCountries\Utility\Apis\AetherEpiasGeoLocationService`` |
+--------------------------------+-------------------------------------------------------------+---------------------------+
| ``showBackendRestrictionIndicator`` | Shows an icon in backend preview for restricted CEs.  | ``1`` (enabled)           |
+--------------------------------+-------------------------------------------------------------+---------------------------+

After saving your configuration, clear the TYPO3 caches to apply changes.

----

..  _configuration_verification:

Verification
============

1. Enable **developmentMode** and set a test IP.  
2. Visit a frontend page that includes restricted content.  
3. Observe visibility changes based on your test IP’s country.  
4. Optionally, check the TYPO3 log for messages like:

   ..  code-block:: text

       [hidebycountries] IP resolved to country: FR
       [hidebycountries] Content element hidden for visitor from FR

----

..  seealso::

    * :ref:`Installation <installation>`
    * :ref:`Developer Guide <developer>`
