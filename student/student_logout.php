<?php
    unset($_SESSION['id']);
    unset($_SESSION['userrole']);
    unset($_SESSION['firstname']);
    unset($_SESSION['infix']);
    unset($_SESSION['lastname']);

    session_destroy();

    header("Location: ./index.php");
?>