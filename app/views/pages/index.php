<?php require APPROOT . '/views/inc/header.php'; ?>

<h1><?php echo $data['title']; ?></h1>

<ul>
    <?php foreach($data['posts'] as $post):?>
        <li><?php echo $post->title;?></li>
    <?php endforeach;?>
<?php require APPROOT . '/views/inc/footer.php'; ?>

<!--
able to go to controller and load model (pages controller)
load the model (database.php) and call model function (getPosts)
set that to a variable and send to view
-->