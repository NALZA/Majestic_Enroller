<!DOCTYPE html>
<html>

<head>
    <meta charset="UTF-8">
    <title>Enrollment</title>
    <link rel="stylesheet" href="styles.css">
</head>

<body>
    <div class="content">
        <h1>Student Summary</h1>
        <button onclick="window.location.href='index.php'">Add A New Student</button>
        <div id="student_table">
            <table>
                <tr>
                    <th>Firstname</th>
                    <th>Lastname</th>
                    <th>Current School Year</th>
                    <th>Email</th>
                </tr>

                <?php include 'db.php';
                $db = new db();
                $students = $db->getStudents();
                if ($students->num_rows > 0) {
                    while ($row = $students->fetch_assoc()) {

                        echo "
                    <tr style=\"cursor: pointer;\">
                        <form name=\"singleStudent" . $row["P_Key"] . "\" action=\"student.php\" method=\"get\">
                        <input type=\"hidden\" type=\"number\" name=\"key\" value=" . $row["P_Key"] . ">
                        </form>
                        <td onclick=\"inspectStudent(" . $row["P_Key"] . ")\">" . $row["fName"] . "</td>
                        <td onclick=\"inspectStudent(" . $row["P_Key"] . ")\">" . $row["lName"] . "</td>
                        <td onclick=\"inspectStudent(" . $row["P_Key"] . ")\">" . $row["currentSchoolYear"] . "</td>
                        <td><a href=\"mailto:" . $row["email"] . "\">" . $row["email"] . "</td>
                        <td><button id=\"edit\" onclick=\"editStudent(" . $row["P_Key"] . ")\" type=\"button\">Edit</button></td>
                        <td><button id=\"delete\" onclick=\"confirmDelete(" . $row["P_Key"] . ")\" type=\"button\">Delete</button></td>
                    </tr>
                        <form name=\"deleteForm" . $row["P_Key"] . "\" action=\"delete.php\" method=\"post\">
                        <input type=\"hidden\" type=\"number\" name=\"key\" value=" . $row["P_Key"] . ">
                        </form>
                        <form name=\"editStudent" . $row["P_Key"] . "\" action=\"index.php\" method=\"post\">
                        <input type=\"hidden\" type=\"number\" name=\"key\" value=" . $row["P_Key"] . ">
                        </form>";
                    }
                } else {
                    echo "No Students";
                }
                ?>


            </table>
        </div>
        <button onclick="window.location.href='report.php'">View A Report Of Students</button>
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

            function editStudent(pkey) {
                let form = "editStudent" + pkey;
                document.forms[form].submit();
            }
        </script>
    </div>
</body>

</html>