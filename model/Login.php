<?php


class Login
{

    public function __construct(Db $dbObj)
    {
        $this->mysqli = $dbObj->db;
    }

    function authentification ()
    {
        if(session_status() === PHP_SESSION_NONE)
        {
            session_start();
        }
        return $_SESSION["connecte"];
    }

    function connexionAdmin()
    {
        if(!$this->authentification()){
            include "view/login.php";
            exit();
        }
    }


    public function loginAdmin()
    {

        $login = strip_tags($_POST["username"]);
        $mdp = strip_tags($_POST["mdp"]);

        $stmt = $this->mysqli->query("SELECT count(*) as nba FROM admin 
WHERE username='$login' and password='$mdp'");
        $res = $stmt->fetch_assoc();

        return $res['nba'];
    }
}



