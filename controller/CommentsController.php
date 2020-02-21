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
        $commentsList = $this->getComments();
        include "view/singleArticle.php";
    }
}