<?php
require_once "C:\\xampp\\htdocs\\myphplearningcourse\\Training\\mini_project\\const\\init.php";
function get_file($assoc=0){
    return json_decode(file_get_contents(DB_PATH),$assoc);
}
function get_author($assoc=0){
    return json_decode(file_get_contents(DB_AUTHOR),$assoc);
}
