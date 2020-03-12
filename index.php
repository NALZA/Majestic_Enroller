<!DOCTYPE html>
<html>

<head>
    <meta charset="UTF-8">
    <title></title>
</head>

<body>
    <div id="enroll-form">
        <form action="index.php" method="post">
            <label>First Name: </label> <input type="text" name="fname" required><br>
            <label>Last Name: </label> <input type="text" name="lname" required><br>
            <label>Date of Birth: </label> <input type="date" name="dateOfBirth" max="<?php echo date("Y/m/d") ?>" min="2000-01-01" required><br>
            <label>Enrolment Date: </label> <input type="date" name="enrolmentDate" max="<?php echo date("Y/m/d") ?>" required><br>
            <label>Current School Year:</label> <input type="number" name="currentYear" value="7" min="7" max="12" required><br>
            <label>Home Phone: </label> <input type="tel" id="phone" name="hPhone" placeholder="0498765432" pattern="[0-9]{2}[0-9]{4}[0-9]{4}" required><br><br>
            <label>Mobile Phone: </label> <input type="tel" id="phone" name="mPhone" placeholder="0498765432" pattern="[0-9]{2}[0-9]{4}[0-9]{4}" required><br><br>
            <label>Email: </label> <input type="email" id="email" name="email" required><br>
            <label>1st Contact Name: </label> <input type="text" name="contactName1" placeholder="Usually Parent" required><br>
            <label>1st Contact Phone:</label> <input type="tel" id="phone" name="contactPhone1" placeholder="0498765432" pattern="[0-9]{2}[0-9]{4}[0-9]{4}" required><br><br>
            <label>2nd Contact Name: </label><input type="text" name="contactName2" required><br>
            <label>2nd Contact Phone: </label><input type="tel" id="phone" name="contactPhone2" placeholder="0498765432" pattern="[0-9]{2}[0-9]{4}[0-9]{4}" required><br><br>
            <input type="submit">
        </form>
        <a href="summary.php">View Summary</a>
    </div>
    <?php include 'db.php';
    if (isset($_POST['fname'])) {
        $db = new db();
        $db->addStudent($_POST['fname'], $_POST['lname'], $_POST['dateOfBirth'], $_POST['enrolmentDate'], $_POST['currentYear'], $_POST['hPhone'], $_POST['mPhone'], $_POST['email'], $_POST['contactName1'], $_POST['contactPhone1'], $_POST['contactName2'], $_POST['contactPhone2']);
    } ?>
</body>


</html>