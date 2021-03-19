<?php
$userrole = 'teacher';

if(!isset($_SESSION['id'])){
    if(!$_SESSION['userrole'] == $userrole){
        header("Location: ./index.php");
    }
}
echo utf8_encode($_SESSION['userrole'] . "<br>" . $_SESSION['id'] . "<br> hallo " . $_SESSION['firstname'] . "<br>");
?>

<a href="./index.php?page=teacher/teacher_logout">Uitloggen</a>