

<?php
foreach($articleComments as $articleComment)
{?>
    <div id="comments">
        <span><?=$articleComment["username"] ?></span>
        <span><?=$articleComment["insert_date"] ?></span>
        <p><?=$articleComment["content"] ?></p>
        <hr>
    </div>


<?php
}
?>
