<?php
    $host = "localhost";
    $db_user = "root";
    $db_password = "";
    $db_name = "phpbasicsdb";

    // mysql => mysqli (only mysql)
    // pdo (multiple database connecttion) (php data object == pdo)

    $conn = mysqli_connect($host, $db_user, $db_password, $db_name) or die("Connection error " . mysqli_connect_error());
    if($conn){
        $sql = "SELECT * FROM `students`";
        $results = mysqli_query($conn, $sql);

        while ($row = mysqli_fetch_assoc($results)){
            echo $row['stu_name'] . " : " . $row['course'];
            echo "<br>";
        }
    }

?>
