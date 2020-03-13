<?php include 'db.php';
if (isset($_POST['fname'])) {
    $db = new db();
    $db->addStudent(
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
        $_POST['contactPhone2']
    );
    echo "<script> window.location=\"summary.php\"; </script>";
}
