<?php
defined('BASEPATH') OR exit('No direct script access allowed');

if (!function_exists('w3css')) {
  /**
   * [w3css description]
   * @return [type] [description]
   */
  function w3css() {
    return "<link rel=\"stylesheet\" href=\"https://www.w3schools.com/w3css/4/w3.css\" />";
  }
}

if (!function_exists('jquery')) {
  /**
   * [jquery description]
   * @return [type] [description]
   */
  function jquery() {
    return "<script type=\"text/javascript\" src=\"https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js\"></script>";
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
    return $cdn;
  }
}

if (!function_exists("popper")) {
  /**
   * [popper description]
   * @return [type] [description]
   */
  function popper() {
    return "<script src=\"https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js\" integrity=\"sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1\" crossorigin=\"anonymous\"></script>";
  }
}

if (!function_exists("fontawesome")) {
  /**
   * [fontsawesome description]
   * @return [type] [description]
   */
  function fontsawesome() {
    return "<link rel=\"stylesheet\" href=\"https://use.fontawesome.com/releases/v5.3.1/css/all.css\" integrity=\"sha384-mzrmE5qonljUremFsqc01SB46JvROS7bZs3IO2EmfFsd15uHvIt+Y8vEf7N7fWAU\" crossorigin=\"anonymous\">";
  }
}

if (!function_exists("react")) {
  function react() {
    $cdn = "<script crossorigin src=\"https://unpkg.com/react@16/umd/react.production.min.js\"></script>";
    return $cdn . PHP_EOL . "<script crossorigin src=\"https://unpkg.com/react-dom@16/umd/react-dom.production.min.js\"></script>";
  }
}
?>
