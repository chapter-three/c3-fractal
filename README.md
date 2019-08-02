# C3 Fractal

[Fractal](https://fractal.build) is a design system tool, like Pattern Lab. This site exists to demonstrate a [Fractal](https://fractal.build) pattern library, used within Drupal, using the [UI Patterns](https://drupal.org/project/ui_patterns) suite of modules.

## Information


_* The Github repo is a mirror (meant for easily browsing the codebase). It's only updated if the user pushing code has configured additional push URLs [according to these instructions](https://github.com/chapter-three/wiki/blob/master/Chapter%20Three/Developers/GIT.md#push-to-multiple-remotes-by-default)._

| Name | URL  |
| :--- | :--- |
| Dashboard | https://dashboard.pantheon.io/sites/75e1a05e-d1ea-4c7f-95c5-34159376d7dd |
| Site | https://dev-c3-fractal.pantheonsite.io |
| Codebase | `ssh://codeserver.dev.75e1a05e-d1ea-4c7f-95c5-34159376d7dd@codeserver.dev.75e1a05e-d1ea-4c7f-95c5-34159376d7dd.drush.in:2222/~/repository.git` |
| Github* | https://github.com/chapter-three/c3-fractal |
| <nobr>Fractal Pattern Library<nobr> | https://dev-c3-fractal.pantheonsite.io/libraries/fractal/fractal/build/index.html |
| Fractal UI Patterns Listing | https://dev-c3-fractal.pantheonsite.io/patterns

### Notes

- The Fractal library is located in `web/libraries/fractal/fractal`. There are currently 3 patterns:
  - Blockquote
  - Button
  - Card
- There is a very basic Drupal theme at `web/themes/custom/fractal`. It doesn't have any CSS or build scripts. It currently defines only one Pattern & template (which passes through to the Fractal template): Blockquote.
- There is a symlink to the Fractal components to the `web/themes/custom/fractal/templates` directory, which is consumed directly by `ui_patterns_fractal` module.
- Patterns are configured in Drupal, in a few places:
  1. https://dev-c3-fractal.pantheonsite.io/hello: This is a landing node, that has a few Paragraphs configured:
      - Blockquote paragraph (default display)
      - Card paragraph (default display)
      - Button link paragraph (default display)
  2.


## Local Setup

1. Install dependencies:

```sh
cd web/libraries/fractal/fractal
npm install
```

2. Start server with BrowserSync:

    _Note:  If you get an error when running `fractal start`, try installing the cli tool globally: `npm i -g @frctl/fractal`_

```sh
fractal start --sync
```

3. Rebuild static style guide instance:

  ```sh
fractal build
```
