

<h3>Les articles</h3>
<ul>
    <?php
    foreach ($articlesList as $article)
    {
    ?> <li>
        <h3> <?= $article['title']; ?> </h3>
        <div> <?= $article["content"];?></div>
    </li>
    <?php
    }
    ?>

</ul>
