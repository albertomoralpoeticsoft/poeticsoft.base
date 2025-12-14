<?php

trait PB_UI_Login {   

  public function register_pb_ui_login() {    

    add_action(
      'login_enqueue_scripts', 
      function () {

        $icon_id = get_option('site_icon');
        $icon_url = wp_get_attachment_url($icon_id);

        ?>
        <style type="text/css">

          body.login div#login h1 a {
            background-image: url('<?php echo $icon_url ?>');
            height: 80px;
            width: 80px;
            background-size: contain;
            background-repeat: no-repeat;
            padding-bottom: 10px;
          }

        </style>
        <?php
      }
    );
  }
}