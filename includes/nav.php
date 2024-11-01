<?php

add_action('admin_menu', 'add_userpilot_to_menu');

add_action('admin_bar_menu', 'add_userpilot_to_menu_bar', 999);

// Include userpilot in the admin top menu bar
function add_userpilot_to_menu_bar()
{
  global $wp_version;
  global $wp_admin_bar;

  $icon = '<img src="' . userpilot_PATH_74BFEF808DDF3 . '/assets/userpilot-icon-white.png' . '">';

  $args = array(
    'id' => 'userpilot-admin-menu',
    'title' => '<span class="ab-icon" ' . ($wp_version < 3.8 && !is_plugin_active('mp6/mp6.php') ? ' style="margin-top: 3px;"' : '') . '>' . $icon . '</span><span class="ab-label">Userpilot</span>', 
    'parent' => FALSE,  
    'href' => get_bloginfo('wpurl') . '/wp-admin/admin.php?page=nav.php',
    'meta' => array('title' => 'userpilot widget')
  );

  $wp_admin_bar->add_node($args);
}
// Include userpilot in the admin main menu bar
function add_userpilot_to_menu()
{
  add_options_page('userpilot widget', 'Userpilot', 'activate_plugins', basename(__FILE__), 'userpilot_options_page');
}

?>
