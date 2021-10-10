# PHP Assignment

a simple php codebase for minimalist functionality. using mysqli as database driver


# File Structure

* /api - for expose data via API design ( should always like JSON )
* /lib - for utility and lib function ( import 'prevent-access.php' will not allow access directly from web pages )
* /view - frontend web page design
* index.php - adding this will auto redirect to homepage `view/index.php`


# Example 

### Creating a new page

```php
<?php define("PAGEACCESS", true); ?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
</body>

</html>
```

### Initiate a database connection 

```php
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
```