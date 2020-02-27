<?php


class AdminController
{
    private $model;
    private $modelArticle;
    private $modelCom;

    public function __construct(DB $dbObj)
    {
        $this->model = new Admin($dbObj);
        $this->modelArticle = new Articles($dbObj);
        $this->modelCom = new Comments($dbObj);
    }


//    private function authentification ()
//    {
//        if(session_status() === PHP_SESSION_NONE)
//        {
//            session_start();
//        }
//        return true;
//    }
//
//
//    private function connexion()
//    {
//        if(!authentification()){
//            header("Location:loginAdmin.php");
//            exit();
//        }
//    }
//à vérifier car fonctionne pas!
    public function write()
    {
        $artTitle = $_POST["artTitle"];
        $artContent = $_POST["artContent"];
        $this->modelArticle->AdminArticle($artTitle,$artContent);

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
        $this->articleComment();
        include "view/admin/oneArtAdmin.php";
    }

    public function comListAdmin()
    {

    }


}