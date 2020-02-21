

<h3>Les articles</h3>
<ul>
    <?php

    foreach ($articlesList as $article)
    {

    ?> <li>

        <h3><b><a href="/view/singleArticle.php?id=<?=$article['id']?>"><?= $article['title']; ?></a></b> </h3>
        <?=$article['insert_date'];?>
        <div> <?= $article["content"];?></div>

    </li>
    <?php
    }
    ?>

</ul>
