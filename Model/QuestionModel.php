<?php
require_once "./Model/Database.php";
class QuestionModel extends Database
{
    public function getQuestion()
    {
        return $this->select("SELECT * FROM Question");
    }
}