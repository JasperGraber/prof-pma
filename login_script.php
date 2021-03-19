<?php
include_once("./db_connect.php");
include_once("./functions.php");

// Sanitize arrays.
$email = sanitize($_POST['email']);
$password = sanitize($_POST['password']);

// Connection with database.
// $teacher = "SELECT * FROM `login` INNER JOIN `userrole` ON login.role_id = userrole.userrole_id 
//                                 INNER JOIN `teacher` ON login.login_id = teacher.login_id
//                                 WHERE login_email = '$email'";
// $result = mysqli_query($conn, $teacher);

$sql = "SELECT * FROM `login` INNER JOIN `userrole` ON login.role_id = userrole.userrole_id 
                                INNER JOIN `teacher` ON login.login_id = teacher.login_id
                                -- INNER JOIN `student` ON login.login_id = student.login_id
                                -- INNER JOIN `student_class` ON student.student_id = student_class.student.id --
                                WHERE login_email = '$email'";
$result = mysqli_query($conn, $sql);

// Login.
if (!isset($_POST['email']) == '' && !isset($_POST['password']) == '') {
    if (!mysqli_num_rows($result)) {
        // Wrong email.
        echo "email bestaat niet";
    } else {
        // Good email.
        if ($record = mysqli_fetch_assoc($result)) {
            if ($password != $record['login_password']) {
                // Wrong password.
                echo "verkeerd wachtwoord";
            } else {
                // Good password.
                $_SESSION['userrole'] = $record['userrole_userrole'];

                switch ($record['userrole_userrole']) {
                    case 'student':
                        $_SESSION['id'] = $record['student_id'];
                        $_SESSION['firstname'] = $record['student_firstname'];
                        $_SESSION['infix'] = $record['student_infix'];
                        $_SESSION['lastname'] = $record['student_lastname'];
                        $_SESSION['class'] = $record['class_id'];

                        header("Location: ./index.php?page=student/student_home");
                        break;

                    case 'teacher':
                        $_SESSION['id'] = $record['teacher_id'];
                        $_SESSION['firstname'] = $record['teacher_firstname'];

                        header("Location: ./index.php?page=teacher/teacher_home");
                        break;

                    case 'admin':
                        header("Location: ./index.php?page=admin_home");
                        break;
                }
            }
        }
    }
} else {
    echo "voor je wachtwoord en email in";
}
