<html>
<head>
    <title>Question</title>
</head>
<body>


<form action="createQuestionBD.php" method="post">

    Название: <input type="text" name="header"><br>
    Описание: <input type="text" name="description"><br>

    <?php
    $n =3;
    for ($i = 1; $i <= $n; $i++) {
        echo file_get_contents("html/header.html");

    }?>
    <input type="submit">

</form>

</body>
</html>