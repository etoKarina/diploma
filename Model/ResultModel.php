<?php
require_once "./Model/Database.php";
class ResultModel extends Database
{
    public function getResult()
    {
        return $this->select("SELECT * FROM Result");
    }
}