<?php define("PAGEACCESS", true); ?>
<?php require_once __DIR__ . "/../lib/database.php"; ?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <p>
        <?php   
            $result = mysqli_query($conn, "SELECT * FROM user");
            if ($result->num_rows > 0) {
                while($row = $result->fetch_assoc()) {
                    echo json_encode($row);
                }
            } else {
                echo "0 results";
            }
        ?>
    </p>
</body>

</html>