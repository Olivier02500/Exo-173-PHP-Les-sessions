<?php
session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Title</title>
</head>
<body style="background: <?=$_SESSION['color']?>">

<form action="/colors.php" method="post">
    <label for="color">choisissez une couleurs :</label>
    <select name="chooseColor" id="color">
        <option value="red">red</option>
        <option value="blue">blue</option>
        <option value="green">green</option>
        <option value="yellow">yellow</option>
        <option value="purple">purple</option>
    </select>
    <input type="submit" name="colorChange">
</form>

</body>
</html>