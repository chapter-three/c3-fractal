---
title: Fractal + Drupal
---

- **Twig Namespace**: Twig Namespace support via [Fractal Twig Drupal Adapter](https://github.com/wearewondrous/fractal-twig-drupal-adapter) is required. See the "Notes" tab on the Card component. Without this, including any component that nests another component will cause a fatal PHP error.
- **Formatted Markup**: Need to account for formatted markup that comes from a WYSIWYG. Many fields will be WYSWYG-enabled. This needs to be accounted for in any pattern that can accept 1-2+ sentences of text.  These fields are generally always set up with a basic WYSIWYG interface, which can be limited, as far as allowed HTML tags, but isn't always.
- **Link Attributes**: Need to account for rendering links with an attributes object. Critical attributes are passed through from Drupal's backend that affect multilingual sites.
- **Container Attributes**: Need the ability to merge attributes on the top-level component wrappers. Without this, QuickEdit must be disabled, and various other functionality will break, e.g. Views AJAX support.
- **Images**: Drupal has fantastic support for Responsive Images. Running an image uri through a component just for a sake of doing so, would prevent the ability to use them.
