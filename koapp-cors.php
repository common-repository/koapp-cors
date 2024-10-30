<?php
/*
 * Plugin Name: KOAPP-CORS
 * Plugin URI: http://kingofapp.es
 * Description: CORS quick-fix for api calls using the send_headers hook.
 * Author: King Of App
 * Version: 0.0.1
 * Author URI: http://kingofapp.es
 * License: GPLv2 or later.
 */


  add_action( 'send_headers', 'koappcors_addHeaders' );

  function koappcors_addHeaders() {
          header("Access-Control-Allow-Origin: *");
          header('Access-Control-Allow-Headers: Origin, Content-Type, Accept-Encoding, X-Auth-Token, token, Authorization, Cache-control, X-Requested-With');
  }



?>
