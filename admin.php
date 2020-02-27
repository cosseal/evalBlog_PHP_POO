<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <script src="https://kit.fontawesome.com/5c87734899.js" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css"
          integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"
            integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM"
            crossorigin="anonymous"></script>
    <link rel="stylesheet" href="style.css">
    <title>Dashboard</title>
</head>
<body>
<header>
    <nav class="nav">
        <ul class="menu_flex">
            <li class="flex_items menu-item home"><a href="admin.php?controller=admin&action=artList">Les articles</a></li>
            <li class="flex_items menu-item comments"><a href="admin.php?controller=admin&action=comList">Les commentaires</a> </li>
            <li class="flex_items menu-item disconnect"><a href="view/Admin/login.php">Se déconnecter</a></li>
        </ul>
    </nav>
</header>


<?php
error_reporting(E_ALL);
ini_set('display_errors', 1);

require "model/Db.php";
$db = new Db();
require "model/Articles.php";
require "model/Comments.php";
require "model/Admin.php";
require "controller/AdminController.php";

include "view/admin/form_write.php";

$controller = "admin";
$action = $_REQUEST["action"];
$id = $_GET["id"];



switch($controller) {
    case "admin":

        switch ($action)
        {
            case "writeArticle":
                $AdminController= new AdminController($db);
                $AdminController->write();
                break;

            case "artList":
                $controller = new AdminController($db);
                $controller->artListAdmin();
                break;

            case "display":
                $controller = new AdminController($db);
                $controller->oneArtAdmin();
                $controller->commentsListArtAdmin();
//                $controllerComments = new CommentsController($db);
//                $controllerComments->articleComment();
                break;

            case "comList":
                break;




        }
}


?>

</body>


