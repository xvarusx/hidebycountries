..  include:: /Includes.rst.txt

.. _start:

==================
Hide by Countries
==================

Welcome to the **hidebycountries** extension documentation.

The `hidebycountries` TYPO3 extension allows integrators and developers to **conditionally hide TYPO3 content elements, plugins, or pages based on the visitor’s country**.  
It uses IP-based geolocation lookup and provides flexible configuration options to control what content should be visible for each country.

This manual helps you install, configure, and customize the extension in your TYPO3 project.

----

..  card-grid::
    :columns: 1
    :columns-md: 2
    :gap: 4
    :class: pb-4
    :card-height: 100

    ..  card:: Introduction

        Learn what **hidebycountries** does, how it works under the hood, and which TYPO3 use cases it solves.

        ..  card-footer:: :ref:`Get an overview <introduction>`
            :button-style: btn btn-secondary stretched-link

    ..  card:: Installation

        Step-by-step guide on how to install and activate the extension via Composer or the TYPO3 Extension Manager.

        ..  card-footer:: :ref:`View the installation steps <installation>`
            :button-style: btn btn-secondary stretched-link

    ..  card:: Configuration

        Learn how to configure caching, country detection, and content visibility rules for your TYPO3 instance.

        ..  card-footer:: :ref:`Learn how to configure the extension <configuration>`
            :button-style: btn btn-secondary stretched-link

    ..  card:: The editor section

        See how editors can manage and control visibility rules for individual pages and content elements directly in the TYPO3 backend.

        ..  card-footer:: :ref:`Discover editor specific tools <for-editors>`
            :button-style: btn btn-secondary stretched-link

    ..  card:: The developers corner

        Learn how developers can extend or customize the geolocation logic, add hooks, or work with the provided PSR-14 events.

        ..  card-footer:: :ref:`Get to know the developers corner <developer>`
            :button-style: btn btn-secondary stretched-link

    ..  card:: Troubleshooting

        Having issues with country detection, caching, or content visibility? Find known issues and debugging tips here.

        ..  card-footer:: :ref:`Learn how to troubleshoot <known-problems>`
            :button-style: btn btn-secondary stretched-link


..  toctree::
    :hidden:
    :titlesonly:

    Introduction/Index
    Installation/Index
    Configuration/Index
    Editor/Index
    Templates/Index
    Developer/Index
    KnownProblems/Index

..  Meta Menu

..  toctree::
    :hidden:

    Sitemap

----

:Extension key:
    hidebycountries

:Package name:
    oussema/hidebycountries

:Version:
    |2.0.0|

:Language:
    en

:Author:
    `Oussema Harrabi <https://oussemaharrbi.tn/>`__

:License:
    This document is published under the
    `Creative Commons BY 4.0 <https://creativecommons.org/licenses/by/4.0/>`__
    license.

:Rendered:
    |today|
