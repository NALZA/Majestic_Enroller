<?php
class db
{
    const SERVERNAME = "localhost";
    const USERNAME = "root";
    const PASSWORD = "";
    const DBNAME = "majestic_enroller_db";

    function getStudents()
    {
    }

    function addStudent(
        $fName,
        $lName,
        $dob,
        $enrollmentDate,
        $currentSchoolYear,
        $homePhone,
        $mobilePhone,
        $email,
        $contactName1,
        $contactPhone1,
        $contactName2,
        $contactPhone2
    ) {
        try {
            $conn = new mysqli(self::SERVERNAME, self::USERNAME, self::PASSWORD, self::DBNAME);
            if ($conn->connect_error) {
                die("Connection failed: " . $conn->connect_error);
            }
            $stmt = $conn->prepare("INSERT INTO student (fName, lName, dob, enrollmentDate, currentSchoolYear, homePhone, mobilePhone, email, contactName1, contactPhone1, contactName2, contactPhone2) VALUES (?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?)");
            $stmt->bind_param("ssssssissisi", $fName, $lName, $dob, $enrollmentDate, $currentSchoolYear, $homePhone, $mobilePhone, $email, $contactName1, $contactPhone1, $contactName2, $contactPhone2);
            $stmt->execute();
            $stmt->close();
        } catch (PDOException $e) {
            echo 'ERROR!';
            print_r($e);
        }
    }
}
