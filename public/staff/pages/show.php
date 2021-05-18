<?php
require_once ('../../../private/initialize.php');
$id = $_GET['id'] ?? '1';

?>

<?php $page_title ='show page'; ?>
<?php include (SHARED_PATH. '/staff_header.php'); ?>

<div id="content">

    <a class="black-link" href="<?php echo url_for('/staff/pages/index.php'); ?>">&laquo; Back to the list</a><br/>

    <div class="page show">



    </div>

</div>



<?php include (SHARED_PATH. '/staff_footer.php'); ?>


