'use strict';

/*
* Require the path module
*/
const path = require('path');

/*
 * Require the Fractal module
 */
const fractal = module.exports = require('@frctl/fractal').create();

/*
 * Setup Twig + Drupal Adapter
 */
const twigAdapter = require('@wearewondrous/fractal-twig-drupal-adapter');
const twig = twigAdapter({
  handlePrefix: '@fractal/',
});

fractal.components.engine(twig);
fractal.components.set('ext', '.twig');


/*
 * Give your project a title.
 */
fractal.set('project.title', 'C3 Fractal');

/*
 * Tell Fractal where to look for components.
 */
fractal.components.set('path', path.join(__dirname, 'components'));

/*
 * Tell Fractal where to look for documentation pages.
 */
fractal.docs.set('path', path.join(__dirname, 'docs'));

/*
 * Tell the Fractal web preview plugin where to look for static assets.
 */
fractal.web.set('static.path', path.join(__dirname, 'public'));
fractal.web.set('builder.dest', path.join(__dirname, 'dist'));


/*
 * Customize the Styleguide theme
 */
const mandelbrot = require('@frctl/mandelbrot');

// Create a new instance with custom config options
const c3Fractal = mandelbrot({
  skin: 'black'
});

fractal.web.theme(c3Fractal);
