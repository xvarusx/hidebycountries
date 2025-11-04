..  include:: /Includes.rst.txt

..  _what-it-does:

What does it do?
================

The **hidebycountries** extension allows TYPO3 integrators and editors to **hide or display content based on the visitor’s country** — automatically detected via IP-based geolocation.

It is designed to help you **control content visibility for different countries**, such as:

* Hiding or showing specific content elements, plugins, or pages for certain countries.
* Complying with **regional regulations** (e.g., GDPR or content restrictions).
* Adapting your website’s content for **localized marketing or legal differences**.
* Improving **user experience** by showing relevant content per region.

This is achieved with minimal configuration and full integration into the TYPO3 backend and frontend rendering process.

----

..  _target-audience:

Who is it for?
==============

The extension is intended for:

* **TYPO3 Integrators** — who want to configure conditional content visibility in TypoScript or PageTS.
* **TYPO3 Editors** — who wish to control which content is visible to which countries without touching code.
* **Developers** — who may extend or hook into the geolocation logic, implement custom rules, or optimize cache behavior.

The extension fits perfectly in projects where regional content management or access control is required.

----

..  _features:

Main features
==============

* Country detection via IP address (using configurable geolocation providers)
* Hide or show content elements and pages based on the visitor’s country
* Backend user interface for defining visibility rules
* Cache-aware logic for fast rendering
* Developer-friendly PSR-14 events and extension points
* Optional integration with TYPO3’s caching framework

----

..  _screenshots:

Screenshots
===========

The following images illustrate how **hidebycountries** integrates into the TYPO3 backend.

..  figure:: /Images/hidebycountries-doc-0.png
    :class: with-shadow
    :alt: Backend visibility settings for content elements
    :width: 400px

----

