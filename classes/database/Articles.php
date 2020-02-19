<?php


class Articles
{
    public function __construct(Db $dbObj)
    {

        $this->mysqli = $dbObj->db;
    }

    public function getArticles()
    {

        $result = $this->mysqli->query("select title, insert_date, content from articles where 1");
        $res = $result->fetch_assoc();
        return $res;
    }
}