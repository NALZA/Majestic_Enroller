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
                    <th>Current School Year</th>
                    <th>Count</th>
                </tr>
                <?php include 'db.php';
                $db = new db();
                $report = $db->report();
                if ($report->num_rows > 0) {
                    while ($row = $report->fetch_assoc()) {

                        echo "
                    <tr >
                        <td>" . $row["currentSchoolYear"] . "</td>
                        <td>" . $row["num"] . "</td>
                    </tr>";
                    }
                } else {
                    echo "No Students";
                }
                ?>


            </table>
        </div>
        <button onclick="window.location.href='summary.php'">Back To Summary</button>
    </div>
</body>

</html>