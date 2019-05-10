![Licence MIT](https://img.shields.io/github/license/francis94c/cdn-helper.svg) ![Splint](https://img.shields.io/badge/splint--ci-francis94c%2Fcdn--helper-orange.svg) ![Lates Release](https://img.shields.io/github/release/francis94c/cdn--helper.svg) ![Commits](https://img.shields.io/github/last-commit/francis94c/cdn--helper.svg)

# cdn-helper #

This library makes available, functions that return HTML link/script tags for popular JS and CSS libraries like

* Bootstrap
* W3.CSS
* JQuery
* Popper.js
* FontsAwesome
* REACT

## Installation ##
To install, download and install Splint from <https://splint.cynobit.com/downloads/splint> and then run the below from your Code Igniter project root

```bash
splint install francis94c/cdn-helper
```
## Loading ##

From anywhere you can access the ```CI``` instance

```php
$this->load->splint("francis94c/cdn-helper", "%cdn");
```

## Functions ##

```php
w3css();
//  returns '<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css" />'
```
```php
jquery();
//  returns '<script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>'
```
```php
bootstrap();
//  returns '<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity=\"sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">'
bootstrap(true); // Return JS as well.
/*
returns '<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous"> <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
*/
```
```php
popper();
//  returns <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
```
```php
fontsawesome();
// returns <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.3.1/css/all.css" integrity="sha384-mzrmE5qonljUremFsqc01SB46JvROS7bZs3IO2EmfFsd15uHvIt+Y8vEf7N7fWAU" crossorigin="anonymous">
```
```php
react();
// returns <script crossorigin src="https://unpkg.com/react@16/umd/react.production.min.js"></script> <script crossorigin src="https://unpkg.com/react-dom@16/umd/react-dom.production.min.js"></script>
```
