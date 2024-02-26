<?php
$request = $_SERVER['REQUEST_URI'];
$path = explode("?", $request);
$path[1] = isset($path[1]) ? $path[1] : null;
$resource = explode("/", $path[0]);
// echo "<script>console.log('path[0] = " . $path[0] . "');</script>";
// echo "<script>console.log('path[1] = " . $path[1] . "');</script>";

?>
<!DOCTYPE html>
<html lang="ko">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>TOP10</title>
    <link rel="stylesheet" href="../css/main.css">
    <link rel="stylesheet" href="../css/login.css">
    <link rel="stylesheet" href="../css/signup.css">
</head>
<body>
    <?php
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
        default :
            $page = "./pages/404.php";
    }
    include($page);
    ?>
</body>
</html>