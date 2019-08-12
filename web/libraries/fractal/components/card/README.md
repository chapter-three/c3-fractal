This component requires a nested button component. Fractal, and most other libraries have their own supported syntax for nesting. It looks something like this:

```twig
{% if button.text and button.url %}
  {% include '@button' with { text: button.text, url: button.url } %}
{% endif %}
```

Drupal will not be able to use this. Using the [Fractal Twig Drupal Adapter](https://github.com/wearewondrous/fractal-twig-drupal-adapter), configured to use a @handlePrefix that matches Twig  namespaces defined in Drupal with Components module is required. Instead of the above, you'd have:

```twig
{% if button.text and button.url %}
  {% include '@fractal/button/button.twig' with { text: button.text, url: button.url } %}
{% endif %}
```
