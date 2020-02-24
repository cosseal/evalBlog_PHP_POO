<!---->
<!--    --><?php
//require "model/Db.php";
//$db = new Db();
//require "model/Articles.php";
//require "controller/ArticlesController.php";
//require "model/Comments.php";
//require "controller/CommentsController.php";
//?>

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
    <title>Dashbord</title>
</head>

<header>
    <nav class="nav">
        <ul class="menu_flex">
            <li class="flex_items menu-item home">Les articles</li>
            <li class="flex_items menu-item comments"> Les commentaires</li>
            <li class="flex_items menu-item disconnect">Se déconnecter</li>
        </ul>
    </nav>


</header>
<body>

<div id="main">
    <div>
        <label>Titre</label>
        <input type="text" placeholder="Votre titre">
    </div>
    <div>
        <label>Texte</label>
        <textarea></textarea>
    </div>
    <div>
        <button type="button" id="submit">Envoyer</button>
    </div>

</div>

<!---->
<!---->
<!--<h3>Les articles</h3>-->
<!--<ul>-->
<!--    --><?php
//
//    foreach ($articlesList as $article)
//    {
//
//        ?><!-- <li>-->
<!---->
<!--        <h3><b><a href="/view/singleArticle.php?id=--><?//=$article['id']?><!--">--><?//= $article['title']; ?><!--</a></b> </h3>-->
<!--        --><?//=$article['insert_date'];?>
<!--        <div> --><?//= $article["content"];?><!--</div>-->
<!---->
<!--    </li>-->
<!--        --><?php
//    }
//    ?>
<!---->
<!--</ul>-->

</body>


