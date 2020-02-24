
<h3>Nos articles</h3>
<ul>
    <?php

    foreach ($articlesList as $article)
    {

    ?> <li>

        <h3><b><a href="index.php?controller=singleArticle&action=display&id=<?=$article['id']?>"><?= $article['title']; ?></a></b> </h3>
        <?=$article['insert_date'];?>
        <div> <?= $article["content"];?></div>

    </li>
    <?php
    }
    ?>

</ul>
