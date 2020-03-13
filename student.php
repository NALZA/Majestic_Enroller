<!DOCTYPE html>
<html>

<head>
    <meta charset="UTF-8">
    <title></title>
</head>

<body>
    <h1>Student Details</h1>
    <div id="student_table">
        <table>
            <tr>
                <th></th>
                <th></th>
            </tr>

            <?php include 'db.php';
            $db = new db();
            $student = $db->getStudent($_GET["key"]);
            if ($student->num_rows > 0) {
                while ($row = $student->fetch_assoc()) {
                    if ($row["imgUrl"] != null) {
                        echo "<img src=\"" . $row["imgUrl"] . "\" alt=\"Student Image\">";
                    }
                    echo "
                    <tr>
                        <td>First Name</td><td>" . $row["fName"] . "</td>
                    </tr><tr>
                        <td>Last Name</td><td>" . $row["lName"] . "</td>
                    </tr><tr>
                        <td>Date of Birth</td><td>" . $row["dob"] . "</td>
                    </tr><tr>
                        <td>Enrollment Date</td><td>" . $row["enrollmentDate"] . "</td>
                    </tr><tr>
                        <td>Current School Year</td><td>" . $row["currentSchoolYear"] . "</td>
                    </tr><tr>
                        <td>Home Phone</td><td>" . $row["homePhone"] . "</td>
                    </tr><tr>
                        <td>Mobile Phone</td><td>" . $row["mobilePhone"] . "</td>
                    </tr><tr>
                        <td>Email</td><td>" . $row["email"] . "</td>
                    </tr><tr>
                        <td>Contact Name 1</td><td>" . $row["contactName1"] . "</td>
                    </tr><tr>
                        <td>Contact Phone 1</td><td>" . $row["contactPhone1"] . "</td>
                    </tr><tr>
                        <td>Contact Name 2</td><td>" . $row["contactName2"] . "</td>
                    </tr><tr>
                        <td>Contact Phone 2</td><td>" . $row["contactPhone2"] . "</td>
                    </tr>        
                    </table>
                    <button id=\"delete\" onclick=\"confirmDelete(" . $row["P_Key"] . ")\" type=\"button\">Delete</button>
                    <form name=\"deleteForm" . $row["P_Key"] . "\" action=\"delete.php\" method=\"post\"><input type=\"hidden\" type=\"number\" 
                        name=\"key\" value=" . $row["P_Key"] . "></form>
                    ";
                }
            } else {
                echo "No Students";
            }
            ?>
            <form action="upload.php" method="post" enctype="multipart/form-data">
                Select image to upload:
                <input type="file" name="fileToUpload" id="fileToUpload">
                <input type="submit" value="Upload Image" name="submit">
                <input type="hidden" type="number" name="key" value="<?php echo $_GET["key"] ?>">
            </form>

    </div>
    <button onclick="window.location.href='summary.php'">View Summary</button>

    <script>
        function confirmDelete(pkey) {
            if (confirm("Are you sure you want to delete a student")) {
                let form = "deleteForm" + pkey;
                document.forms[form].submit();
            }
        }
    </script>
</body>

</html>