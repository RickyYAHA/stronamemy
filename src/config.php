<?php
require("./../vendor/autoload.php");
require('./../src/Post.class.php');

$db = new mysqli("localhost", "root", "", "cms");

$loader = new Twig\Loader\FilesystemLoader('./../src/templates/');
$twig = new Twig\Environment($loader);

?>