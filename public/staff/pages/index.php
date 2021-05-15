<?php require_once ('../../../private/initialize.php'); ?>

<?php
 $pages = [
     ['id' => '1', 'position' => '1', 'visible' => 'true', 'menu_name' => 'Globe Bank'],
     ['id' => '2', 'position' => '2', 'visible' => 'true', 'menu_name' => 'History'],
     ['id' => '3', 'position' => '3', 'visible' => 'true', 'menu_name' => 'Leadership'],
     ['id' => '2', 'position' => '2', 'visible' => 'true', 'menu_name' => 'Contact Us'],
 ]
?>

<?php $page_title = 'page' ; ?>
<?php include (SHARED_PATH . "/staff_header.php");?>

<div id="content">
    <div class="pages listing">
        <h1>Pages</h1>

        <div class="actions">
            <a class="action" href="">Create new pages</a>
        </div>

        <table class="list">

            <tr>
                <th>Id</th>
                <th>Position</th>
                <th>Visible</th>
                <th>Name</th>
                <th></th>
                <th></th>
                <th></th>
            </tr>

            <?php foreach ($pages as $page): ?>
            <tr>
                <td><?php echo h($page['id']); ?></td>
                <td><?php echo h($page['position']); ?></td>
                <td><?php echo $page['visible'] == 1 ? 'true' : 'false'; ?></td>
                <td><?php echo h($page['menu_name']) ?></td>
                <td><a class="action" href="<?php echo url_for('/staff/pages/show.php?id='. h(u($page['id']))); ?>">View</a></td>
                <td><a class="action" href="">Edit</a></td>
                <td><a class="action" href="">Delete</a></td>

            </tr>
            <?php endforeach; ?>
        </table>
    </div>
</div>

<?php include (SHARED_PATH. "/staff_footer.php"); ?>
