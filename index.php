<?php
require_once "functions/functions.php";
$posts=get_file();
?>
<?php foreach($posts as $pid=>$post) : ?>
<div>
    <h1><?= $post->title ?></h1>
    <span><?= $post->author ?></span>
    <p><?= $post->content ?></p>
  </div>
  <?php endforeach ?>