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

        $result = $this->mysqli->query("SELECT * FROM comments WHERE articles_id = $id");

        $tbl = [];
        while($res = $result->fetch_assoc())
        {
            $tbl[] = $res;
        }
        return $tbl;
//        return json_encode(array_reverse($tbl),JSON_PRETTY_PRINT | JSON_UNESCAPED_UNICODE | JSON_UNESCAPED_SLASHES | JSON_PARTIAL_OUTPUT_ON_ERROR);
    }

    public function getAll()
    {
        $stmt = "SELECT comments FROM comments WHERE 1";
    }


}