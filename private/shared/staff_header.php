<?php
if(!isset($page_title)) { ($page_title = 'staff area');}
?>
<!doctype html>

<html lang="en">
  <head>
    <title>GBI - <?php echo h($page_title); ?></title>
    <meta charset="utf-8">
    <link rel="stylesheet" media="all" href="<?php echo url_for('/stylesheets/staff.css'); ?>">
  </head>

  <body>
    <header>
        <h1>GBI Bank</h1>
    </header>

    <navigation>
        <ul>
            <li>Users: <?php echo $_SESSION['username'] ?? ''; ?></li>
            <li><a href="<?php echo url_for('/staff/index.php'); ?>">Menu</a></li>
            <li><a href="<?php echo url_for('/staff/logout.php'); ?>">Log out</a></li>
        </ul>
    </navigation>
    <?php echo display_session_message(); ?>
