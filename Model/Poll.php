<?php
require_once "./Model/Database.php";

class PollModel extends Database
{
    public function getPoll()
    {
        return $this->select("SELECT * FROM Poll");
    }

    public function insertPoll($name, $description, $type, $dateS, $dateF, $timeS, $timeF)
    {
        $id = $this->getPollMaxId() + 1;
        $startTime = $this->unixTime($timeS,$dateS);
        $endTime = $this->unixTime($timeF,$dateF);

        $this->executeStatement("INSERT INTO Poll(id,name, description,type,startTime,endTime)VALUES($id, '$name', '$description','$type',$startTime, $endTime);");

    }

    private function unixTime($time, $date)
    {

        return date_timestamp_get(DateTime::createFromFormat('Y-m-d H:i', $date . ' ' . $time));

    }

    private function unixTimeConvert($datetime)
    {

        echo gmdate('Y-m-d H:i', $datetime);

    }

    private function getPollMaxId()
    {
        $result = $this->select("SELECT max(id) as maxId FROM Poll")[0]["maxId"];
        if (!is_null($result)) {
            return $result;
        } else {
            return 0;
        }

    }


}


