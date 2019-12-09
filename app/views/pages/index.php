<?php require APPROOT . '/views/inc/header.php'; ?>
    <h1><?php echo $data['title']; ?></h1>
    <p>This is the TrapMVC PHP Framework. You will need to edit the config file within the public folder as well as the config file inside the root app file.</p>
<?php require APPROOT . '/views/inc/footer.php'; ?>

<!--
able to go to controller and load model (pages controller)
load the model (database.php) and call model function (getPosts)
set that to a variable and send to view
-->