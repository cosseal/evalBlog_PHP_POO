<?php


class Comments
{
    public function __construct(Db $dbObj)
    {

        $this->mysqli = $dbObj->db;
    }

    public function getArticles()
    {

        $result = $this->mysqli->query("select username, insert_date, content from comments where 1");


        $res = $result->fetch_assoc();
        return $res;
    }
}