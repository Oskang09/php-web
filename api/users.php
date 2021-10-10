<?php

    define("PAGEACCESS", true);
    require_once __DIR__ . "/../lib/database.php";

    $result = mysqli_query($conn, "SELECT * FROM user");
    if ($result->num_rows > 0) {
        while($row = $result->fetch_assoc()) {
            echo json_encode($row);
        }
    } else {
        echo "0 results";
    }
?>