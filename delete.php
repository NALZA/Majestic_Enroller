    <?php
    echo "<h1>Student Deleted</h1>";
    include 'db.php';
    $db = new db();
    $db->deleteStudent($_POST["key"]);
    echo "<script> window.location=\"summary.php\"; </script>";
    ?>