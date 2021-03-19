<?php
    unset($_SESSION['id']);
    unset($_SESSION['userrole']);
    unset($_SESSION['firstname']);

    session_destroy();

    header("Location: ./index.php");
?>