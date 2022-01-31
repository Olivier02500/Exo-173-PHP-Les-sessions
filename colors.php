<?php
session_start();
require 'index.php';

if(isset($_POST['chooseColor'])){
    $_SESSION['color'] = $_POST['backColor'];
    header('Location: /index.php');

    if ($_POST['chooseColor'] === 'red'){
        $_SESSION['color'] = "red";
    }

    if ($_POST['chooseColor'] === 'blue'){
        $_SESSION['color'] = 'blue';
    }

    if ($_POST['chooseColor'] === 'green'){
        $_SESSION['color'] = 'green';
    }

    if ($_POST['chooseColor'] === 'yellow'){
        $_SESSION['color'] = 'yellow';
    }

    if ($_POST['chooseColor'] === 'purple'){
        $_SESSION['color'] = 'purple';
    }
}




