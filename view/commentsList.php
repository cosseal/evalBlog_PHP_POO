

<?php
foreach($article as $commentsList)
{?>
 <div>
     <span><?=$commentsList["username"] ?></span>
<span><?=$commentsList["insert_date"] ?></span>
 <p><?=$commentsList["content"] ?></p>
</div>
<hr>

<?php
}
?>
