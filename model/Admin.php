<?php


class Admin extends Articles
{
    protected $mysqli;

    public function __construct(Db $dbObj)
    {

        $this->mysqli = $dbObj->db;
    }

    public function getAdmin()
    {

        $result = $this->mysqli->query("select username, password from admin where");
        $res = $result->fetch_assoc();
        return $res;
    }
}