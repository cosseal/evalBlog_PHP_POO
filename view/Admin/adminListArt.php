<h1>Liste des articles</h1>
<div>
    <ul>
        <?php
        foreach ($artAdminList as $article)
        {
            ?> <li>

            <h3><b><a href="../../admin.php?controller=admin&action=display&id=<?=$article['id']?>"><?= $article['title']; ?></a></b> </h3>
            <?=$article['insert_date'];?>
            <div> <?= $article["content"];?></div>
        </li>
            <?php
        }
        ?>
    </ul>

</div>

