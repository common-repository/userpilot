<?php

// initialize settings
function userpilot_init_settings()
{
  register_setting( 'userpilot_settings_group', 'userpilot_settings' );
}
add_action( 'admin_init', 'userpilot_init_settings' );

// Delete options on uninstall
function userpilot_uninstall()
{
  delete_option( 'userpilot_settings' );
}
register_uninstall_hook( __FILE__, 'userpilot_uninstall' );


?>
