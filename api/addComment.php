<?php 
ob_start();
session_set_cookie_params(2592000);
session_start();
require '../core/config.php';
require '../core/classes/user.php';
require '../core/classes/video.php';
$video = new Video($con, $_POST['video']);

if(isset($_SESSION['user'])) {
$video = $video->addComment($_POST['text']);
echo $video;
} else {
echo "Login...";
}