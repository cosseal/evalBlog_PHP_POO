<?php


class Articles
{

    private $article;
    public function __construct(Db $dbObj)
    {
        $this->mysqli = $dbObj->db;
        //$this->getArticles();
        //$this->setArticles();
    }

    public function getArticles()
    {
        $result = $this->mysqli->query("select title, insert_date, content from articles where 1");

        $tbl = [];
        while( $res = $result->fetch_assoc())
        {
            $tbl[] = $res;
        }

        return $tbl;
    }

    public function setArticles($article)
    {
        $this->article = $article;
    }


    public function writeArticle($title,$content)
    {

        $stmt= "INSERT INTO articles VALUES(".$title.','.$content.") ";
    }

    public function updateArticle()
    {

    }

    public function deleteArticle()
    {

    }
}


