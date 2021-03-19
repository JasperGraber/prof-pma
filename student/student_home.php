<?php
$userrole = 'student';

if (!isset($_SESSION['id'])) {
    if (!$_SESSION['userrole'] == $userrole) {
        header("Location: ./index.php");
    }
}
?>

<body class="student-body">
    <div class="container-fluid student-container">
        <div class="row header-row">
            <?php
            echo utf8_encode("<br> nummer " . $_SESSION['id'] . "<br> naam " . $_SESSION['firstname'] . " " . $_SESSION['infix'] . " " . $_SESSION['lastname'] . "<br> klas " . $_SESSION['class']);
            ?>
            <a href="./index.php?page=student/student_logout">Uitloggen</a>
        </div>
    </div>
</body>