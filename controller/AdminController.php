<?php


class AdminController
{
    private $model;
    private $modelLogin;
    private $modelArticle;
    private $modelCom;

    public function __construct(DB $dbObj)
    {
        $this->model = new Admin($dbObj);
        $this->modelLogin = new Login($dbObj);
        $this->modelArticle = new Articles($dbObj);
        $this->modelCom = new Comments($dbObj);
    }




    public function write()
    {
        if(isset($_POST["artTitle"]) && isset($_POST["artContent"]))
        {
            $artTitle = utf8_encode($_POST["artTitle"]);
            $artContent = utf8_encode($_POST["artContent"]);
            $this->model->AdminArticle($artTitle,$artContent);
        }
    }

    public function artListAdmin()
    {
        $artAdminList = $this->modelArticle->getArticles();
        include "view/admin/adminListArt.php";
    }
    public function articleComment()
    {
        $id=$_GET["id"];
        $this->modelArticle->setId($id);
        $articleComments = $this->modelCom->getComments($id);
        include "view/admin/commentsListArtAdmin.php";
    }


    public function oneArtAdmin()
    {
        $id=$_GET["id"];
        $this->modelArticle->setId($id);
        $oneArtAdmin = $this->modelArticle->getOneArticle();
        include "view/admin/oneArtAdmin.php";
    }

    public function commentsListArtAdmin()
    {
        $this->articleComment();
        include "view/admin/oneArtAdmin.php";
    }

    public function comListAdmin()
    {

    }

    public function logout()
    {

//        if (isset($_GET["off"])) {
//            session_start();
//            unset($_SESSION["connecte"]);
//            header("Location:read.php");
//        }

    }

}