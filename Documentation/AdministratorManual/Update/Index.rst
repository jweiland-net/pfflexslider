.. include:: ../../Includes.txt

Updating
========

If you update EXT:pfflexslider to a newer version, please read this section carefully!

Update to Version 2.0.0
-----------------------

We have updated FlexSlider from version 2.2.2 to 2.7.2. Further we have updated jquery from version 1.11.1
to 3.5.1. Please check, if slider still works for you.

Property `image` of domain `Slider` is of type ObjectStorage and not FileReference anymore. Please update
your templates and loop over slider.image instead of using it in f:image directly.

Code: ::

   <f:for each="{slider.image}" as="image" iteration="iterator">
       <f:if condition="{iterator.isFirst}">
           <f:image ... />
       </f:if>
   </f:for>
