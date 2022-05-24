<html>
<head>
    <title>Тестируем PHP</title>
</head>
<body>


<?php
require_once "./Model/Poll.php";
$name = $_POST["header"];
$description = $_POST["description"];
$type = $_POST["type"];
$dateS = $_POST["startDate"];
$dateF = $_POST["finishDate"];
$timeS = $_POST["startTime"];
$timeF = $_POST["finishTime"];
$ty = new PollModel();
$ty->insertPoll($name,$description,$type, $dateS,$dateF, $timeS,$timeF);
//echo $name;
//echo $description;
//echo $type;
//echo $dateS;
//echo $dateF;
//echo $timeF;
//echo $timeS;









?>