<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class CDNTests {
  function loadTest(&$ci) {
    $ci->unit->run($ci->load->package("francis94c/cdn-helper"), true, "Load Test");
  }
}
?>
