<?php

require_once __DIR__ . '/traits/utils/all.php';
require_once __DIR__ . '/traits/admin/sections.php';
require_once __DIR__ . '/traits/admin/page.php';
require_once __DIR__ . '/traits/admin/fields.php';
require_once __DIR__ . '/traits/admin/fields-mail.php';
require_once __DIR__ . '/traits/admin/mail.php';
require_once __DIR__ . '/traits/api/mail.php';
require_once __DIR__ . '/traits/ui/login.php';

class Poeticsoft_Base {

  use PB_Utils_All;
  use PB_Admin_Sections;
  use PB_Admin_Page;
  use PB_Admin_Fields_Mail;
  use PB_Admin_Fields;
  use PB_Admin_Mail;
  use PB_API_Mail;
  use PB_UI_Login;

  private static $instance = null;
  public static $dir;
  public static $url;
  public static $adminsections;
  public static $adminfields;

  private function __construct() {    

    $this->set_vars(); 

    $this->register_pb_admin_sections();
    $this->register_pb_admin_page();
    $this->register_pb_admin_fields_mail();
    $this->register_pb_admin_fields();
    $this->register_pb_admin_mail();
    $this->register_pb_api_mail();
    $this->register_pb_ui_login();
  }
}