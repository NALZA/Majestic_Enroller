<!DOCTYPE html>
<html>

<head>
    <meta charset="UTF-8">
    <title></title>
</head>

<body>
    <h1>Student Summary</h1>
    <div id="student_table">
        <table>
            <tr>
                <th>Firstname</th>
                <th>Lastname</th>
                <th>Current School Year</th>
                <th>Email</th>
                <th></th>
            </tr>

            <?php include 'db.php';
            $db = new db();
            $students = $db->getStudents();
            if ($students->num_rows > 0) {
                while ($row = $students->fetch_assoc()) {

                    echo "
                    <tr onclick=\"inspectStudent(" . $row["P_Key"] . ")\">
                        <form name=\"singleStudent" . $row["P_Key"] . "\" action=\"student.php\" method=\"post\"><input type=\"hidden\" type=\"number\" 
                        name=\"key\" value=" . $row["P_Key"] . "></form>
                        <td>" . $row["fName"] . "</td><td>" . $row["lName"] . "</td><td>" . $row["currentSchoolYear"] . "</td>
                        <td>" . $row["email"] . "</td>
                        <td><button id=\"delete\" onclick=\"confirmDelete(" . $row["P_Key"] . ")\" type=\"button\">Delete</button></td>
                    </tr>
                        <form name=\"deleteForm" . $row["P_Key"] . "\" action=\"delete.php\" method=\"post\"><input type=\"hidden\" type=\"number\" 
                        name=\"key\" value=" . $row["P_Key"] . "></form>";
                }
            } else {
                echo "No Students";
            }
            ?>


        </table>
    </div>

    <script>
        function confirmDelete(pkey) {
            if (confirm("Are you sure you want to delete a student")) {
                let form = "deleteForm" + pkey;
                document.forms[form].submit();
            }
        }

        function inspectStudent(pkey) {
            let form = "singleStudent" + pkey;
            document.forms[form].submit();
        }
    </script>
</body>

</html>