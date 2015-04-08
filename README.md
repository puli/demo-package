A Puli Demo Package
===================

This repository contains a demo showing how to use [Puli] in a reusable Composer
package together with [Twig] and [Gulp JS].

Run the following commands after cloning the repository:

```
$ npm install
$ gulp
$ composer install
$ vendor/bin/puli asset install
```

Building your Own
-----------------

If you want to build this demo package from scratch, follow these steps:

1. Create the basic directory layout
2. Copy `composer.json`, `package.json` and `Gulpfile.js` to the project
3. Run `npm install`
4. Run `composer install`
5. Put your SCSS files into `res/scss/`
6. Put your Javascript files into `res/js/`
7. Run `gulp`
8. Run `vendor/bin/puli plugin install Puli\\AssetPlugin\\Api\\AssetPlugin`
9. Run `vendor/bin/puli map /puli/demo-package res` to map the Puli path `/puli/demo-package` to the `res` directory
10. Run `vendor/bin/puli asset map -f /puli/demo-package/public /demo` to map your assets to the `/demo` directory of the default install target

[Puli]: http://puli.io
[Silex]: http://silex.sensiolabs.org
[Twig]: http://twig.sensiolabs.org
[Gulp JS]: http://gulpjs.com
