<div id="main">
    <form action="admin.php" method="post">
        <div>
            <label>Titre</label>
            <input type="text" name="artTitle" placeholder="Votre titre">
        </div>
        <div>
            <label>Texte</label>
            <textarea name="artContent"></textarea>
        </div>
        <div>
            <input type="hidden" name="action" value="writeArticle">
            <button type="submit" name="submit">Envoyer</button>
        </div>
    </form>

</div>
