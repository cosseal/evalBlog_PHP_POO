<?php


class Comments
{

    public function __construct(Db $dbObj)
    {
        $this->mysqli = $dbObj->db;

    }

    public function getComments()
    {

        $result = $this->mysqli->query("SELECT username, insert_date, content FROM comments
        LEFT JOIN articles WHERE comments.articles_id ='. $id . '");

        $tbl = [];
        while($res = $result->fetch_assoc())
        {
            $tbl[] = $res;
        }
        return $tbl;

    }
}