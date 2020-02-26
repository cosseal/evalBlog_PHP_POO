
<header>
    <nav class="nav">
        <ul class="menu_flex">
            <li class="flex_items menu-item home"><a href="admin.php?controller=admin&action=artList">Les articles</a></li>
            <li class="flex_items menu-item comments"><a href="admin.php?controller=admin&action=comList">Les commentaires</a> </li>
            <li class="flex_items menu-item disconnect"><a href="logout.php">Se déconnecter</a></li>
        </ul>
    </nav>
</header>

<body>

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

require "./model/Db.php";
$db = new Db();
require "model/Articles.php";
require "./controller/ArticlesController.php";
require "./model/Comments.php";
require "./controller/CommentsController.php";
require "./model/admin.php";
require "./controller/AdminController.php";

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
                $controller = new ArticlesController($db);
                $controller->singleArticle();
                $controllerComments = new CommentsController($db);
                $controllerComments->articleComment();
                break;

            case "comList":
                break;

            default:



        }
}


?>





</body>


