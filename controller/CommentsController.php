<?php


class CommentsController
{
    private $model;

    public function __construct(Db $dbObj)
    {
        $this->model = new Comments($dbObj);
    }

    public function commentsList()
    {
        $commentsList = $this->getAll();
        include "view/admin.php";
    }

    public function articleComment()
    {
        $id=$_GET["id"];
        $articleComments = $this->model->getComments($id);
        include "view/commentsList.php";
    }


    public function commentInsert()
    {
        if(isset($_POST["username"]) && isset($_POST["content"]))
        {
            $username = utf8_encode($_POST["username"]);
            $content = utf8_encode($_POST["content"]);
            $this->model->insertComment($username,$content);
        }

    }
}