<?php

function userpilot_options_page()
{
  // get userpilot widget status
  $option = get_option('userpilot_settings');
  if($option['status'] == "disabled" || !$status){
    $name = "userpilot-enable";
    $status = "Enable";
  }else
  {
    $name = "userpilot-disable";
    $status = "Disable";
  }
  $pages = get_pages();
  $page_ids = $option['userpilot_pages'];
?>  
  <style type="text/css">
    .note {
    color: green;
    width: 100%;
    display: inline-block;
    margin: 10px 0px;
    }

    .danger
    {
      color: red;
    }
    .pages
    {
      width: 120px;
      height: 50px;
    }
  .pages {
      width: 200px !important;
      height: 200px !important;
  }

  </style>

  <br>
  <br>
  <form name="userpilot-form" action="options.php" method="post" enctype="multipart/form-data">
   <?php settings_fields( 'userpilot_settings_group' ); ?>
  <textarea name = "userpilot_settings[userpilot_installation_code]" placeholder="userpilot js code" style="width: 100%; min-height: 200px"><?php echo $option['userpilot_installation_code'] ?></textarea> 
  <span class = "note" >* can be found in your account under Settings > Installation</span>
  <div >
  <div class = "pages-cont" >
    <p><strong> Run widget on pages </strong></p>
    <select name = "userpilot_settings[userpilot_pages][]" multiple="true" class = "pages" >
      <option value = "-1" <?php if(in_array(-1, $page_ids) || sizeof($page_ids) == 0) echo "selected"; ?> >All pages</option>
      <?php foreach($pages as $page){ ?>

        <option value = "<?php echo $page->ID ?>" <?php if(in_array($page->ID, $page_ids)) echo "selected"; ?> ><?php echo $page->post_title?></option>

      <?php } ?>

    </select>
    <span class = "note" >* for multiple selection press shift and then select the option</span>

  </div>
            <p class="submit">
                <?php echo submit_button('Save Changes'); ?>
            </p>
  </div>
  </form>
<?php
}
?>
