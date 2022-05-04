<html>
<head>
    <title>Тестируем PHP</title>
</head>
<body>


<?php
$login = $_POST["name"];
$pw = $_POST["email"];


$sql = "SELECT 1 FROM User WHERE login = '" . $login . "' AND password = '" . $pw ."'";

$db = new SQlite3 ("test.db");
$res = $db->query($sql)->fetchArray();

if ($res) {

    echo "kull";
} else {
    echo "ne kull";
}




?>



//$sql = "SELECT * FROM test";
//$db = new SQLite3("test.db");
//$res = $db->query($sql);
//
//echo "<table>"; // start a table tag in the HTML
//
//while($row = $res->fetchArray()){   //Creates a loop to loop through results
//    echo "<tr><td>" . htmlspecialchars($row[0]) . "</td><td>" . htmlspecialchars($row[1]) . "</td></tr>";
//}
//
//echo "</table>"; //Close the table in HTML
//
//
//unset($db);

</body>
</html>