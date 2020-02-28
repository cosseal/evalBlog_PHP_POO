<form action="index.php" method="post">
    <div> <input type="text" name="username" placeholder="Votre pseudo" required> </div>
    <div><textarea name="content"placeholder="Votre commentaire"></textarea></div>
    <input type="hidden" name="articleId" value="<?=$id?>">
    <input type="hidden" name="controller" value="formComment">
    <input type="hidden" name="action" value="insertComment">
    <div><button type="submit" class="btn btn-primary" id="submitCom">Publier</button></div>
</form>