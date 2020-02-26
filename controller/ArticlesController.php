<?php



class ArticlesController
{
    private $model;
    private $modelCom;

    public function __construct(Db $dbObj)
    {
        $this->model = new Articles($dbObj);
        $this->modelCom = new Comments($dbObj);
    }

    public function articlesList()
    {

        $articlesList = $this->model->getArticles();
        include "view/articlesList.php";

    }

    public function singleArticle()
    {

        $id = $_GET['id'];
        $this->model->setId($id);
        $singleArticle = $this->model->getOneArticle();
        $comments = $this->modelCom->getComments($id);
        include "view/singleArticle.php";
    }


}