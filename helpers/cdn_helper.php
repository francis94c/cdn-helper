<?php
defined('BASEPATH') OR exit('No direct script access allowed');

if (!function_exists('w3css')) {
  /**
   * [w3css description]
   * @return [type] [description]
   */
  function w3css() {
    return "<link rel=\"stylesheet\" href=\"https://www.w3schools.com/w3css/4/w3.css\" />" . PHP_EOL;
  }
}

if (!function_exists('jquery')) {
  /**
   * [jquery description]
   * @return [type] [description]
   */
  function jquery() {
    return "<script type=\"text/javascript\" src=\"https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js\"></script>" . PHP_EOL;
  }
}

if (!function_exists('bootstrap')) {
  /**
   * [bootstrap description]
   * @param  boolean $js [description]
   * @return [type]      [description]
   */
  function bootstrap($js=false) {
    $cdn = "<link rel=\"stylesheet\" href=\"https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css\" integrity=\"sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T\" crossorigin=\"anonymous\">";
    if ($js) $cdn .= PHP_EOL . "<script src=\"https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js\" integrity=\"sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM\" crossorigin=\"anonymous\"></script>";
    return $cdn . PHP_EOL;
  }
}

if (!function_exists("popper")) {
  /**
   * [popper description]
   * @return [type] [description]
   */
  function popper() {
    return "<script src=\"https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js\" integrity=\"sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1\" crossorigin=\"anonymous\"></script>" . PHP_EOL;
  }
}

if (!function_exists("fontawesome")) {
  /**
   * [fontsawesome description]
   * @return [type] [description]
   */
  function fontsawesome() {
    return "<link rel=\"stylesheet\" href=\"https://use.fontawesome.com/releases/v5.3.1/css/all.css\" integrity=\"sha384-mzrmE5qonljUremFsqc01SB46JvROS7bZs3IO2EmfFsd15uHvIt+Y8vEf7N7fWAU\" crossorigin=\"anonymous\">" . PHP_EOL;
  }
}

if (!function_exists("react")) {
  /**
   * [react description]
   * @return [type] [description]
   */
  function react() {
    $cdn = "<script crossorigin src=\"https://unpkg.com/react@16/umd/react.production.min.js\"></script>";
    return $cdn . PHP_EOL . "<script crossorigin src=\"https://unpkg.com/react-dom@16/umd/react-dom.production.min.js\"></script>" . PHP_EOL;
  }
}

if (!function_exists("qunit")) {
  /**
   * [qunit description]
   * @return [type] [description]
   */
  function qunit() {
    $cdn = "<link rel=\"stylesheet\" href=\"https://code.jquery.com/qunit/qunit-2.9.2.css\">";
    return $cdn . PHP_EOL . "<script src=\"https://code.jquery.com/qunit/qunit-2.9.2.js\"></script>" . PHP_EOL;
  }
}

if (!function_exists("angularjs")) {
  /**
   * [angularjs description]
   * @return [type] [description]
   */
  function angularjs() {
    return "<script src=\"https://ajax.googleapis.com/ajax/libs/angularjs/1.7.8/angular.min.js\"></script>" . PHP_EOL;
  }
}

if (!function_exists("materializecss")) {
  /**
   * [materializecss Materialize CSS CDN]
   * @param  boolean $js Import JS.
   * @return string      Browser import Strings
   */
  function materializecss(bool $js=false):string
  {
    $cdn = "<link rel=\"stylesheet\" href=\"https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/css/materialize.min.css\">";
    if ($js) return $cdn . PHP_EOL . "<script src=\"https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/js/materialize.min.js\"></script>" . PHP_EOL;
    return $cdn . PHP_EOL;
  }
}

if (!function_exists('vue')) {
  /**
   * [vue description]
   * @date   2020-02-10
   * @return string     [description]
   */
  function vue():string
  {
    return '<script src="' .
    ENVIRONMENT === 'development' ?
    'https://cdn.jsdelivr.net/npm/vue/dist/vue.js' : 'https://cdn.jsdelivr.net/npm/vue/dist/vue.min.js' .
    '"></script>';
  }
}

if (!function_exists('vuex')) {
  /**
   * [vuex description]
   * @date   2020-02-10
   * @return string     [description]
   */
  function vuex():string
  {
    return '<script src="' .
    ENVIRONMENT === 'development' ?
    'https://unpkg.com/vuex@3.1.1' : 'https://unpkg.com/vuex@3.1.1/dist/vuex.min.js' .
    '"></script>';
  }
}
