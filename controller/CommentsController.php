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
        include "view/commentsList.php";
    }

    public function ArticleComment()
    {
        $ArticleComments = $this->model->getComments($id);
        include "view/singleArticle.php";
    }
}