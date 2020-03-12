<!DOCTYPE html>
<html>

<head>
    <meta charset="UTF-8">
    <title></title>
</head>

<body>
    <?php
    echo "<h1>Student Deleted</h1>";
    include 'db.php';
    $db = new db();
    $db->deleteStudent($_POST["key"]);
    //echo "<script> window.history.back(); </script>";
    ?>
</body>

</html>