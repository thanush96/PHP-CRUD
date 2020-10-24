<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
    <title>PHP CRUD</title>
</head>

<body>
    <div class="container">
        <div class="jumbotron">
            <h2>PHP - CRUD : Display Data in PHP</h2>
            <hr />

            <?php
            $connection = mysqli_connect("localhost", "root", "");
            $db = mysqli_select_db($connection, "phpcrud");

            $query = "SELECT * FROM student";
            $query_run = mysqli_query($connection, $query);
            ?>

        </div>
    </div>

</body>

</html>