.. include:: ../Includes.txt


.. _configuration:

=============
Configuration
=============

Target group: **Developers, Integrators**

How to configure the extension. Try to make it easy to configure the extension.
Give a minimal example or a typical example.

Minimal Example
===============

- It is necessary to include static template `PF Flexslider (pfflexslider)`

We prefer to set a Storage PID with help of TypoScript Constants:

.. code-block:: typoscript

   plugin.tx_pfflexslider.persistence {
     # Define Storage PID where slider records are located
     storagePid = 4
   }

.. _configuration-typoscript:

TypoScript Setup Reference
==========================

image
-----

Define width and height for the image in Slider.
Of cause you can override these values in Template directly.

.. code-block:: typoscript

   plugin.tx_pfflexslider {
     settings {
       image {
         width = 400c
         height = 300c
         maxWidth = 400
         minWidth = 400
         maxHeight = 300
         minHeight = 300
       }
     }
   }

