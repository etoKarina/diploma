<?php
require_once "./Model/Database.php";

class UserModel extends Database
{
    public function getUser()
    {
        return $this->select("SELECT * FROM User");
    }
}



