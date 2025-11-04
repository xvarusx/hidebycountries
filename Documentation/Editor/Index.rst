..  include:: /Includes.rst.txt

..  _for-editors:

===========
For Editors
===========

The **hidebycountries** extension allows editors to control which content
elements (CEs) are visible to visitors based on their country.

This section explains how to use the extension within the TYPO3 backend,
how restricted content is displayed, and what to expect in the Page module.

----

..  _editor_visibility_rules:

Hiding or Showing Content by Country
====================================

After the extension is installed, each content element in TYPO3
includes a new **"Hide by Countries"** field.

**To configure visibility for a content element:**

1. Open a page in the **Page module**.
2. Edit the desired content element.
3. Switch to the **Visibility** tab.
5. Select one or more **Country** 

   - To hide the element from visitors in Germany and France, select:  
     ``DE,FR``  
   - Leave the field empty to make it visible to all countries.

6. Save and close the record.

..  _screenshots:


The following images illustrate how to configure visisbility for a content element in the TYPO3 backend.

..  figure:: /Images/hidebycountries-doc-0.png
    :class: with-shadow
    :alt: Backend visibility settings for content elements
    :width: 400px

----

..  _editor_backend_indicator:

Backend Restriction Indicator
=============================

When the **Backend Restriction Indicator** is enabled in the extension configuration,
TYPO3 will automatically mark restricted content elements in the **Page module**.

You’ll see a small colored badge or label in the content element preview,
for example:

..  figure:: /Images/hidebycountries-doc-1.png
    :class: with-shadow
    :alt: Backend restriction indicator example
    :width: 400px

    Example of the backend restriction indicator

This helps editors quickly identify which content elements have visibility restrictions
without needing to open and inspect each record individually.

..  important::

    The indicator is **only visible** in the backend preview.  
    It does not affect the frontend rendering of the page.

----

..  _editor_preview:

Previewing Restricted Content
=============================

If you want to check how a page appears to visitors from a specific country,
you can use **development mode** (usually enabled by integrators or developers).

In development mode, a fixed test IP is used so that editors can preview
how the page would look for different regions.

Ask your administrator or developer to adjust this setting if you need to test
specific countries.

----

..  _editor_notes:

Common Use Cases
================

* **Localized marketing:**  
  Show different banners or promotions for different countries.

* **Legal or compliance notices:**  
  Display country-specific disclaimers (e.g., GDPR consent or content restrictions).

* **Content licensing:**  
  Hide media or text that’s not available in certain countries.

----

..  _editor_faq:

FAQ
===

**Q:** Why is my content not visible on the frontend?  
**A:** Check the "Hide by Countries" field — your country might be listed there.

**Q:** Can I show content only for one country?  
**A:** Yes. Simply hide it for all others, or use multiple versions of the CE with different rules.

**Q:** Can editors change the GeoIP service or caching?  
**A:** No, these are technical settings handled by developers or administrators.

----

..  seealso::

    * :ref:`Configuration <configuration>`
    * :ref:`Developer Corner <developer>`
