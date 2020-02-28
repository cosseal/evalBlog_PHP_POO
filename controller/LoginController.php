<?php


class LoginController
{
    private $model;
    private $log;

    Public function __construct(Db $dbObj)
    {
        $this->model = new Login($dbObj);

    }








    public function login()
    {
        $error = null;


        if(isset($_POST["username"]) && isset($_POST["mdp"]))
        {
            $login = strip_tags($_POST["username"]);
            $mdp = strip_tags($_POST["mdp"]);

            $log = $this->model->loginAdmin();



            if($log >= 1)
            {



                    session_start();
                    $_SESSION["connecte"]=1;
                    include "admin.php";

                else {
                    echo "Votre mot de passe est incorrect";
                }
            }
            else{
                echo "Votre login est incorrect";
            }

        }
    }




}






//    /**
//     * @return mixed
//     */
//    public function getLogin()
//    {
//        return $this->login;
//    }
//
//    /**
//     * @param mixed $login
//     */
//    public function setLogin($login): void
//    {
//        $this->login = $login;
//    }
//
//    /**
//     * @return mixed
//     */
//    public function getMdp()
//    {
//        return $this->mdp;
//    }
//
//    /**
//     * @param mixed $mdp
//     */
//    public function setMdp($mdp): void
//    {
//        $this->mdp = $mdp;
//    }
//
//
