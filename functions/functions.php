<?php
require_once "C:\\xampp\\htdocs\\myphplearningcourse\\Training\\mini_project\\const\\init.php";
function get_file($assoc=0){
    return json_decode(file_get_contents(DB_PATH),$assoc);
}
function get_author($assoc=0){
    return json_decode(file_get_contents(DB_AUTHOR),$assoc);
}
function is_admin(){
    return 1;
}
function is_logged(){
    return 1;
}
function save_post($title="نا مشخص",$author="نا مشخص",$content="نا مشخص"){
$posts=get_file(1);
$posts[]=array("title"=>$title,"author"=>$author,"content"=>$content);
file_put_contents(DB_PATH,json_encode($posts));
echo "<p>با موفقیت ذخیره شد</p>
";
}
function is_search(){
    return isset($_GET['search']) && !empty($_GET['search']);
   
}
function find_post($keyword){
    $fended_post=array();
$posts=get_file();
foreach ($posts as $post) {
   if(strpos($post->content,$keyword) !==false || strpos($post->title,$keyword) !==false || strpos($post->author,$keyword) !==false){
  $post->content = str_replace($keyword,"<span style='color:red; background-color:#eee'>$keyword</span>",$post->content);
  $post->title = str_replace($keyword,"<span style='color:red; background-color:#eee'>$keyword</span>",$post->title);
  $post->author = str_replace($keyword,"<span style='color:red; background-color:#eee'>$keyword</span>",$post->author);

  $fended_post[]=$post;
 


   };
}
return $fended_post;
}