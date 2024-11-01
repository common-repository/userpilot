<?php

// install userpilot widget

if(is_admin())
{
  add_action('in_admin_footer', 'install_userpilot');
}else{
  add_action('wp_footer', 'install_userpilot');
}

function install_userpilot()
{
  if ( is_feed() || is_robots() || is_trackback() )
  {
    return;
  }
  $options = get_option('userpilot_settings');
  if( empty( $options ) )
  {
    return;
  }

    $userpilot = $options['userpilot_installation_code'];   
    $allow_page = 0;
    if(!$options['userpilot_pages'])
    {
      $allow_page = 1;
    }else
    if(in_array(-1,  $options['userpilot_pages']))
    {
      $allow_page = 1;
    }else
    {
      if(in_array(get_the_ID(),  $options['userpilot_pages']))
      {
        $allow_page = 1;
      }
    }

    if ( $userpilot && $allow_page )
    {
      eval(" ?> $userpilot <?php ");
    }
  
  }
?>