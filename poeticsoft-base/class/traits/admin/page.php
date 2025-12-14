<?php

trait PB_Admin_Page {   

  public function register_pb_admin_page() {

    add_action( 
      'admin_menu', 
      function () {

        add_options_page(
          'Poeticsoft',
          'Poeticsoft',
          'manage_options',
          'poeticsoft',
          [$this, 'admin_page_render']
        );
      }
    );    

    add_filter(
      'admin_init', 
      function () { 

        foreach(self::$adminsections as $section) {

          add_settings_section(
            'pb_settings_section_' . $section['id'], 
            $section['title'],
            $section['callback'],
            'poeticsoft'
          );
        }
      }
    );  
  }

  public function admin_page_render() {

    echo '<div class="wrap">
    <h1>Poeticsoft Settings</h1>
    <form method="post" action="options.php">';

    settings_fields('poeticsoft');
    do_settings_sections('poeticsoft');
    submit_button();

    echo '</form>
    </div>';
  }
}