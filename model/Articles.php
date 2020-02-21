<?php


class Articles
{

    private $article;
    private $id;
    public function __construct(Db $dbObj)
    {
        $this->mysqli = $dbObj->db;
        //$this->getArticles();
        //$this->setArticles();
    }

    public function getArticles()
    {
        $result = $this->mysqli->query("SELECT id,title, insert_date, content FROM articles WHERE 1");

        $tbl = [];
        while( $res = $result->fetch_assoc())
        {
            $tbl[] = $res;
        }

        return $tbl;
    }

    public function id($id)
    {
        $this->id=$id;
    }

    public function getOneArticle()
    {
        $result = $this->mysqli->prepare("SELECT id,title, insert_date, content FROM articles WHERE id='?'");
       $result->bind_param("isis",$this->id);


        return $result;
    }

    public function setArticles($article)
    {
        $this->article = $article;
    }
//
//
//    public function AdminArticle()
//    {
//
//        $stmt= "INSERT INTO articles VALUES(".$title.','.$content.") ";
//    }
//
//
//
//
//    public function deleteArticle()
//    {
//    $stmt = "DELETE FROM articles WHERE id=''";
//    }
}


