<?php
trait PB_Admin_Fields_Mail {  

  public function register_pb_admin_fields_mail() {

    self::$adminfields = array_merge(
      self::$adminfields,
      [

        [
          'key' => 'mail_host',
          'field_type' => 'string',
          'title' => 'Mail Host',
          'description' => 'Mail Host Description',
          'value' => 'smtp.mail.ovh.net',
          'section' => 'smtp'
        ],

        [
          'key' => 'mail_port',
          'field_type' => 'number',
          'type' => 'number',
          'title' => 'Mail Port',
          'description' => 'Mail Port Description',
          'value' => 465,
          'section' => 'smtp'
        ],

        [
          'key' => 'mail_smtpsecure',
          'field_type' => 'string',
          'title' => 'SMTP Secure',
          'description' => 'SMTP Secure Description',
          'value' => 'ssl',
          'section' => 'smtp'
        ],

        [
          'key' => 'mail_username',
          'field_type' => 'string',
          'title' => 'Mail Username',
          'description' => 'Mail Username Description',
          'value' => 'partners@poeticsoft.com',
          'section' => 'smtp'
        ],

        [
          'key' => 'mail_password',
          'field_type' => 'string',
          'title' => 'Mail Password',
          'description' => 'Mail Password Description',
          'value' => 'JsAU8)0987654',
          'section' => 'smtp'
        ],

        [
          'key' => 'mail_from',
          'group' => 'general',
          'field_type' => 'string',
          'title' => 'Mail From',
          'description' => 'Mail From Description',
          'value' => 'partners@poeticsoft.com',
          'section' => 'smtp'
        ],

        [
          'key' => 'mail_fromname',
          'group' => 'general',
          'field_type' => 'string',
          'title' => 'Mail From Name',
          'description' => 'Mail From Name Description',
          'value' => 'Poeticsoft',
          'section' => 'smtp'
        ],
      ]
    );    
  }
}
