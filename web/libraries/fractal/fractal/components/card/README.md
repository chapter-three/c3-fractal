This component requires a nested button component. Fractal, and most other libraries have their own supported syntax for nesting. It looks something like this:

```twig
{% if buttons %}
  {% for button in buttons %}
    {% include '@button' with { button: button } %}
  {% endfor %}
{% endif %}
```

Drupal will not be able to use this. Twig namespace support is critical for this to work. Using the [Fractal Twig Drupal Adapter](https://github.com/wearewondrous/fractal-twig-drupal-adapter) in the Fractal instance, and using namespaces to handle nested components is required.  So, instead of the above, you'd have:

```twig
{% if buttons %}
  {% for button in buttons %}
    {% include "@fractal/button/button.twig" with { button: button } %}
  {% endfor %}
{% endif %}
```

Generally, avoiding nesting, unless it's necessary sense is a good idea. Too much of it ends up with really complex data structures that make it very difficult to use in Drupal.
