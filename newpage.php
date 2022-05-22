<html>
<head>
    <title>Тестируем PHP</title>
</head>
<body>
<?php
require "./Database.php";
$db = new Database();
var_dump($db->select("select * from Poll"))


?>





</body>
</html>