<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
<?php
session_start();
include_once "App/Controller/UserController.php";
include_once "App/Controller/AuthController.php";
include_once "App/Controller/PostController.php";

$userController = new UserController();
$authController = new AuthController();
$postController = new PostController();
$page = isset($_GET["page"]) ? $_GET["page"] : null;

switch ($page) {
    case "login":
        if($_SERVER["REQUEST_METHOD"] == "GET") {
            $authController->showLogin();
        }else{
            $authController->Login($_REQUEST);
        }
      break;
    case "User-list":
        $userController->showAll();
        break;
    case "logout":
        $authController->logout();
        break;
    case "delete-user" :
       $userController->Delete();
       break;
    case "create-user":
        $userController->create();
        break;
    case "detail-user":
        $userController->detail();
       break;
    case "update-user":
        if($_SERVER["REQUEST_METHOD"]== "GET") {
            $userController->editUser();
        }else{
            $userController->update();
        }
        break;
    case "keyword" :
        echo"1";
        break;
    case "post-list":
        $postController->getAll();
        break;
    case "create-post":
        $postController->add();
        break;
    case "delete-post":
        $postController->delete();
        break;
    case "detail-post":
        $postController->detail();
        break;
    case "update-post" :
        if($_SERVER["REQUEST_METHOD"] == "GET"){
            $postController->displayUpdate();
        }else{
            $postController->update();
        }
        break;
    default:
        if (isset($_REQUEST["search"])) {
            $userController->search();
        } else {
            header("location:index.php?page=login");
        }
}
?>
</body>
</html>