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
}