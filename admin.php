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
    <link rel="stylesheet" href="/style.css">
    <title>Dashboard</title>
</head>
<body>
<header>
    <nav class="nav">
        <ul class="menu_flex">
            <li class="flex_items menu-item home"><a href="admin.php?controller=admin&action=artList">Les articles</a></li>
            <li class="flex_items menu-item comments"><a href="admin.php?controller=admin&action=comList">Les commentaires</a> </li>
            <li class="flex_items menu-item disconnect"><a href="view/Admin/logout.php">Se déconnecter</a></li>
        </ul>
    </nav>
</header>


<div id="main">
    <form action="/controller/AdminController.php" method="post">
    <div>
        <label>Titre</label>
        <input type="text" name="artTitle" placeholder="Votre titre">
    </div>
    <div>
        <label>Texte</label>
        <textarea name="artContent"></textarea>
    </div>
    </form>
    <div>
        <button type="submit" name="submit">Envoyer</button>
    </div>
</div>


<?php
error_reporting(E_ALL);
ini_set('display_errors', 1);

require "model/Db.php";
$db = new Db();
require "model/Articles.php";
require "model/Comments.php";
require "model/Admin.php";
require "controller/AdminController.php";

$controller = $_GET["controller"];
$action = $_GET["action"];
$id = $_GET["id"];

switch($controller) {
    case "admin":
        switch ($action)
        {

            case "artList":
                $controller = new AdminController($db);
                $controller->artListAdmin();
                break;

            case "display":
                $controller = new AdminController($db);
                $controller->oneArtAdmin();
//                $controllerComments = new CommentsController($db);
//                $controllerComments->articleComment();
                break;

            case "comList":
                break;




        }
}


?>

</body>


