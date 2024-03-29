<?php
require("./../src/config.php");

use Steampixel\Route;

Route::add('/', function() {
    global $twig;
    
    $posts = Post::getPage();
    $t = array("posts" => $posts);
    
    
    $twig->display("index.html", $t);
});

Route::add('/upload', function() {
    global $twig;
    $twig->display("upload.html");
});

Route::add('/upload', function() {
    global $twig;

    $tempFileName = $_FILES['uploadFile']['tmp_name'];
    $title = $_POST['title'];
    Post::upload($tempFileName, $title);

    ;
    header('Location: /stronamemy/pub');
    die();
}, 'post');

Route::run('/stronamemy/pub');
?>
