<html>
<head>
    <title>Create</title>
</head>
<body>


<form action="createPollDB.php" method="post">>

    Название: <input type="text" name="header"><br>
    Описание: <input type="text" name="description"><br>
    Тип: <input type="radio" name="type" value="open" />Открытое <br>
         <input type="radio" name="type" value="oneOption" />С одним вариантом ответом <br>
         <input type="radio" name="type" value="manyOption" />С несколькими вариантами ответа<br>
    Начало: <input type="date" name = "startDate"><input type="time" name = "startTime"><br>
    Конец: <input type="date" name = "finishDate"><input type="time" name = "finishTime"><br><br>
    <input type="submit">

</form>

</body>
</html>