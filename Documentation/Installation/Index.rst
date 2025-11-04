..  include:: /Includes.rst.txt

..  _installation:

============
Installation
============

This guide explains how to install and activate the **hidebycountries** extension in your TYPO3 project.  
The extension adds IP-based country detection and content visibility control features to your TYPO3 instance.

----

..  _installation_requirements:

System requirements
===================

Make sure your environment meets the following requirements:

* **TYPO3:** 12.4 LTS or newer (compatible with TYPO3 v13)
* **PHP:** 8.1 or higher (recommended: 8.2+)
* **Composer:** for dependency management
* **Database:** MySQL/MariaDB or compatible engine supporting the TYPO3 Caching Framework

Optional (but recommended):

* Internet access for IP-to-country lookup services
* A caching backend (e.g., database, Redis, or file-based)

----

..  _installation_composer:

Installation via Composer
=========================

The recommended and most reliable installation method is via **Composer**:

..  code-block:: bash

    composer require oussema/hidebycountries


----

..  _installation_extension_manager:

Installation via Extension Manager
==================================

If you prefer the TYPO3 backend:

1. Log in as an administrator.
2. Navigate to **Admin Tools → Extensions**.
3. Click **Get Extensions**.
4. Search for `hidebycountries`.
5. Click **Import and Install**.
6. Flush caches after installation.

----

..  _installation_dependencies:

Dependencies
============

The extension depends on the following TYPO3 core extensions:

* `core`
* `extbase`
* `fluid`
* `frontend`

----

..  _installation_verification:

Verification
============

To confirm successful installation, run:

..  code-block:: bash

    vendor/bin/typo3 extension:list | grep hidebycountries

Expected output:

..  code-block:: text

    hidebycountries   2.0.0   active   Conditionally hide content by visitor country

You can now continue with the configuration guide to enable country-based visibility.

----

..  seealso::

    * :ref:`Configuration <configuration>`
    * :ref:`Developer guide <developer>`
    * TYPO3 documentation: :ref:`Extension Installation <t3upgrade:start>`
