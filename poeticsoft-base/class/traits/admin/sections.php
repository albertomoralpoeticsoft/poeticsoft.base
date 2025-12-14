<?php

trait PB_Admin_Sections {   

  public function register_pb_admin_sections() {

    self::$adminsections[] = [
      'id' => 'smtp', 
      'title' => 'Ajustes de conexión del servidor de correo',
      'callback' => function() {
        echo '<p>Configura la conexión con el servidor SMTP de salida de correos.</p>';
      }
    ];    
  }
}