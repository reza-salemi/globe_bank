<?php

require_once('../private/initialize.php');

if(isset($_GET['id']))
{
    $page_id = $_GET['id'];
    $page = find_page_by_id($page_id);
    if(!$page){
        redirect_to(url_for('/index.php'));
    }
    else{

    }
}
?>

<?php include(SHARED_PATH . '/public_header.php'); ?>

<div id="main">

  <?php include(SHARED_PATH . '/public_navigation.php'); ?>

  <div id="page">

      <?php
          // show the page from database
          if(isset($page))
          {
              // TODO add html scaping back in
              echo $page['content'];
          }
          else{
              // show home page
              include(SHARED_PATH . '/static_homepage.php');
          }

          ?>

  </div>

</div>

<?php include(SHARED_PATH . '/public_footer.php'); ?>
