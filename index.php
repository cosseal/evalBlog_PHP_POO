<?php
?>
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
    <title>Le blog Troll</title>
</head>
<body>

<header>

<?php require "view/header.php" ?>

</header>

<section>
    <div class="container?controller=''&action=''">
        <div> <h2>Présentation</h2> </div>

        <div class=?controller=singleArticle&action=display></div>





    </div>

    <?php
require "model/Db.php";
$db = new Db();
require "model/Articles.php";
require "controller/ArticlesController.php";

$controller = $_GET["controller"];
$action = $_GET["action"];

switch($controller){
    case "singleArticle":
        if($action="display")
        {
            require "model/Comments.php";
            require "controller/CommentsController.php";

            $controller = new ArticlesController($db);
            $controller->singleArticle();
            $controllerComments = new CommentsController($db);
            $controllerComments->commentsList();
            include "view/singleArticle.php";
        }



        break;

    default:

        $controller = new ArticlesController($db);
        $controller->articlesList();

    break;
}
?>

</section>

<footer>
    <?Php require "view/footer.php" ?>
</footer>

</body>






