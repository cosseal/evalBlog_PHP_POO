<?php


class Articles
{

    private $article;
    private $id;
    public function __construct(Db $dbObj)
    {
        $this->mysqli = $dbObj->db;

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

    public function setId($id)
    {
      $this->id = $id;
    }

    public function getOneArticle()
    {
       $id=$_GET['id'];
       $stmt = $this->mysqli->query("SELECT id,title, insert_date, content FROM articles WHERE id='$id'");


       while($res=$stmt->fetch_assoc())
       {
           return $res;
       }
        return $res;

    }

    public function setArticles($article)
    {
        $this->article = $article;
    }

    public function AdminArticle($title,$content)
    {
        $stmt= $this->mysqli->prepare("INSERT INTO articles (title, content) VALUES(?,?)");
        $stmt->bind_param("ss", $title,$content);
        $stmt->execute();
        $stmt->close();
    }



    public function deleteArticle()
    {
    $stmt = "DELETE FROM articles WHERE id=''";
    }
}


