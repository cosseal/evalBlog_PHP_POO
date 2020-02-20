<?php


class ArticlesController
{
    private $model;

    public function __construct(Db $dbObj)
    {
        $this->model = new Articles($dbObj);
    }

    public function articlesList()
    {

        $articlesList = $this->model->getArticles();
        include "view/articlesList.php";
    }


}