<html>
<head>
    <title>Тестируем PHP</title>
</head>
<body>
<?php
require_once "./Model/Poll.php";
require_once "./Model/QuestionModel.php";
require_once "./Model/ResultModel.php";
require_once "./Model/UserModel.php";
require_once "./Model/AnswerModel.php";

$db = new UserModel();
$qw = new AnswerModel();
$as = new QuestionModel();
$zx = new ResultModel();
$ty = new PollModel();


var_dump($db->getUser());
echo '<br>';

var_dump($as->getQuestion());
echo '<br>';

var_dump($zx->getResult());
echo '<br>';

var_dump($ty->getPoll());
echo '<br>';


echo '<br>';

echo '<br>';
echo '<br>';
echo '<br>';
echo '<br>';

var_dump(DateTime::createFromFormat('Y-m-d H:i', "2022-05-12". ' ' . "13:23"));

?>





</body>
</html>