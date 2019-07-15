<?php
/*
Plugin Name: my Print_r
Author: Salva
*/

function myPrint_r($data) {
  if (WP_DEBUG == true) :
    echo "<pre>";
      print_r($data);
    echo "</pre>";
  endif;
}


?>