<?php
require_once "../functions/functions.php";
if ($_SERVER['REQUEST_METHOD']=='POST' && !empty($_POST['title']) && !empty($_POST['content']) && !empty($_POST['author'])) {
$title=$_POST['title'];
 $author=$_POST['author'];
$content=$_POST['content'];
$author=$_POST['author'];
save_post($title,$author,$content);
echo "
<script>
setTimeout(function(){
   window.location.href = '".BASE_URL."';
}, 2000);
</script>
";
}else{
    echo 'Invalid Request';  
}