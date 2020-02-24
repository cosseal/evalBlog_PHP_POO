<?php


class Comments
{

    private $idArticle;
    public function __construct(Db $dbObj)
    {
        $this->mysqli = $dbObj->db;

    }

    public function setIdArticle($idArticle)
    {
        $this->idArticle = $idArticle;
    }


     public function getComments($id)
    {
        $idArticle = $_GET["id"];
        $result = $this->mysqli->query("SELECT username, insert_date, content FROM comments
        LEFT JOIN articles WHERE comments.articles_id =articles.'.$idArticle . '");

        $tbl = [];
        while($res = $result->fetch_assoc())
        {
            $tbl[] = $res;
        }
        return $tbl;
    }

    public function getAll()
    {
        $stmt = "SELECT comments FROM comments WHERE 1";
    }


}