<?php
require_once "../functions/functions.php";

$posts=get_file();
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <link rel="stylesheet" href="assets/css/styles.css">

  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>اولین پروژه مینی من</title>
</head>
<body>
  <?php  if (is_admin()==true) : ?>
<a href="<?= BASE_URL.'panel' ?>">پنل مدیریت</a>
<?php endif ?>
<?php if(count((array)$posts)<>0) : ?>
<?php foreach($posts as $pid=>$post) : ?>
<div class="container">
    <h1><?= $post->title ?></h1>
    <p><?= $post->content ?></p>
    <footer><div><span> نویسنده پست : <?= $post->author ?></span></div></footer>
  </div>
  <?php endforeach ?>
  <?php endif ?>
  
</body>
</html>

