<?php


class Admin
{
    protected $mysqli;

    public function __construct(Db $dbObj)
    {
        $this->mysqli = $dbObj->db;
    }

    public function connection()
    {

        $result = $this->mysqli->query("SELECT * FROM admin WHERE 1");

        while($res=$result->fetch_assoc())
        {
            return $res;
        }
       return $res;
    }
    public function AdminArticle($title,$content)
    {
        $stmt= $this->mysqli->prepare("INSERT INTO articles (title, content) VALUES(?,?)");
        $stmt->bind_param("ss", $title,$content);
        $stmt->execute();
        $stmt->close();
    }
}