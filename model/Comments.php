<?php


class Comments
{

    public function __construct(Db $dbObj)
    {
        $this->mysqli = $dbObj->db;

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

    //ne fonctionne pas...problème d'id?


    public function insertComment($username,$content,$id)
    {
        $stmt= $this->mysqli->prepare("INSERT INTO comments (username,content, articles_id) VALUES(?,?,?)");
        $stmt->bind_param("ssi", $username,$content,$id);
        $stmt->execute();
        $stmt->close();
    }


}