<?php include 'db.php';
if (isset($_POST['fname'])) {
    $db = new db();
    $db->updateStudent(
        $_POST['fname'],
        $_POST['lname'],
        $_POST['dateOfBirth'],
        $_POST['enrolmentDate'],
        $_POST['currentYear'],
        $_POST['hPhone'],
        $_POST['mPhone'],
        $_POST['email'],
        $_POST['contactName1'],
        $_POST['contactPhone1'],
        $_POST['contactName2'],
        $_POST['contactPhone2'],
        $_POST['key']
    );
    echo "<script> window.location=\"summary.php\"; </script>";
}
