<?php
require_once "./Model/Database.php";
class AnswerModel extends Database
{
    public function getAnswer()
    {
        return $this->select("SELECT * FROM Answer");
    }
}