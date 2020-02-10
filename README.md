![Licence MIT](https://img.shields.io/github/license/francis94c/cdn-helper.svg) ![Splint](https://img.shields.io/badge/splint--ci-francis94c%2Fcdn--helper-orange.svg) ![Latest Release](https://img.shields.io/github/release/francis94c/cdn-helper.svg) ![Commits](https://img.shields.io/github/last-commit/francis94c/cdn-helper.svg)

# cdn-helper #

This library makes available, functions that return HTML link/script tags as string for popular JS and CSS libraries like

* Bootstrap
* W3.CSS
* JQuery
* Popper.js
* FontsAwesome
* REACT
* AngularJS
* Materialize CSS
* Vue
* VueX

You can call them in your view files.

## Installation ##
To install, download and install Splint from <https://splint.cynobit.com/downloads/splint> and then run the below from your Code Igniter project root

```bash
splint install francis94c/cdn-helper
```
## Loading ##

From anywhere you can access the ```CI``` instance

```php
$this->load->splint('francis94c/cdn-helper', '%cdn');
// OR
$this->load->package('francis94c/cdn-helper');
```

## Functions ##

__Note:__ some of these function return the development version of their respective CDN links if the value of `ENVIRONMENT` is `development`.

```php
w3css();
jquery();
bootstrap();
bootstrap(true); // Return JS CDN as well.
popper();
fontsawesome();
react();
qunit();
angularjs();
materializecss();
vue();
```
