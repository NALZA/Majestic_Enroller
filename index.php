<!DOCTYPE html>
<html>

<head>
    <meta charset="UTF-8">
    <title></title>
</head>

<body>
    <h1>Enroll A New Student</h1>
    <div id="enroll-form">
        <form action="<?php if ($_POST) {
                            echo "updateStudent.php";
                        } else {
                            echo "newStudent.php";
                        } ?>" method="post">
            <label>First Name: </label> <input type="text" id="fname" name="fname" value="" required><br>
            <label>Last Name: </label> <input type="text" id="lname" name="lname" value="" required><br>
            <label>Date of Birth: </label> <input type="date" id="dob" name="dateOfBirth" max="<?php echo date("Y/m/d") ?>" min="2000-01-01" value="" required><br>
            <label>Enrolment Date: </label> <input type="date" id="enrollment" name="enrolmentDate" max="<?php echo date("Y/m/d") ?>" value="" required><br>
            <label>Current School Year:</label> <input type="number" id="year" name="currentYear" value="7" min="7" max="12" value="" required><br>
            <label>Home Phone: </label> <input type="tel" id="hphone" name="hPhone" placeholder="0498765432" value="" required><br><br>
            <label>Mobile Phone: </label> <input type="tel" id="mphone" name="mPhone" placeholder="0498765432" value="" required><br><br>
            <label>Email: </label> <input type="email" id="email" name="email" value="" required><br>
            <label>1st Contact Name: </label> <input type="text" id="name1" name="contactName1" placeholder="Usually Parent" value="" required><br>
            <label>1st Contact Phone:</label> <input type="tel" id="phone1" name="contactPhone1" placeholder="0498765432" value="" required><br><br>
            <label>2nd Contact Name: </label><input type="text" id="name2" name="contactName2" value="" required><br>
            <label>2nd Contact Phone: </label><input type="tel" id="phone2" name="contactPhone2" placeholder="0498765432" value="" required><br><br>
            <?php if ($_POST) {
                echo "<input type=\"hidden\" type=\"number\" name=\"key\" value=" . $_POST["key"] . ">";
            } ?>
            <input type="submit">
        </form>
        <button onclick="window.location.href='summary.php'">View Summary</button>
    </div>
    <?php include 'db.php';
    if ($_POST) {
        $db = new db();
        $student = $db->getStudent($_POST["key"]);
        if ($student->num_rows > 0) {
            while ($row = $student->fetch_assoc()) {
                echo  "<script>
                        document.getElementById(\"fname\").value =\"" . $row["fName"] . "\";
                        document.getElementById(\"lname\").value =\"" . $row["lName"] . "\";
                        document.getElementById(\"dob\").value =\"" . $row["dob"] . "\";
                        document.getElementById(\"enrollment\").value =\"" . $row["enrollmentDate"] . "\";
                        document.getElementById(\"year\").value =\"" . $row["currentSchoolYear"] . "\";
                        document.getElementById(\"hphone\").value =\"" . $row["homePhone"] . "\";
                        document.getElementById(\"mphone\").value =\"" . $row["mobilePhone"] . "\";
                        document.getElementById(\"email\").value =\"" . $row["email"] . "\";
                        document.getElementById(\"name1\").value =\"" . $row["contactName1"] . "\";
                        document.getElementById(\"phone1\").value =\"" . $row["contactPhone1"] . "\";
                        document.getElementById(\"name2\").value =\"" . $row["contactName2"] . "\";
                        document.getElementById(\"phone2\").value =\"" . $row["contactPhone2"] . "\";
                    </script>";
            }
        }
    }
    ?>
</body>


</html>