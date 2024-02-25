<?php
$request = $_SERVER['REQUEST_URI'];
$path = explode("?", $request);
$path[1] = isset($path[1]) ? $path[1] : null;
$resource = explode("/", $path[0]);
// echo "<script>console.log('path[0] = " . $path[0] . "');</script>";
// echo "<script>console.log('path[1] = " . $path[1] . "');</script>";

$page = "";
switch ($resource[1]) {
    case '':
        $page = "./pages/main.php";
        break;
    case 'login':
        $page = "./pages/login.php";
        break;
    case 'signup':
        $page = "./pages/signup.php";
        break;
}
include($page);
?>