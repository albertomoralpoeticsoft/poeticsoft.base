<?php

trait PB_Utils_All { 

  public static function get_instance() {

    if (self::$instance === null) {

      self::$instance = new self();
    }

    return self::$instance;
  }

  private function set_vars() {

    self::$dir = WP_PLUGIN_DIR . '/poeticsoft-base/';
    self::$url = WP_PLUGIN_URL . '/poeticsoft-base/';
    self::$adminsections = [];
    self::$adminfields = [];
  }

  public function log($display, $withdate = false) { 

    $text = is_string($display) ? 
    $display 
    : 
    json_encode($display, JSON_PRETTY_PRINT);

    $message = $withdate ? 
    date("d-m-y h:i:s") . PHP_EOL
    :
    '';

    $message .= $text . PHP_EOL;

    file_put_contents(
      self::$dir . '/log.txt',
      $message,
      FILE_APPEND
    );
  }
}