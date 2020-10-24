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
            <hr>
            <div class="row">
                <a href="InsertData.php" class="btn btn-success" style="margin-left:80%;">ADD DATA</a>
            </div>

            <br>

            <?php
            $connection = mysqli_connect("localhost", "root", "");
            $db = mysqli_select_db($connection, "phpcrud");

            $query = "SELECT * FROM student";
            $query_run = mysqli_query($connection, $query);
            ?>

            <table class="table table-borderd" style="background-color: while;">
                <thead class="table-dark">
                    <tr>
                        <th>ID</th>
                        <th>First Name</th>
                        <th>Last Name</th>
                        <th>Contact</th>
                        <th>EDIT</th>
                        <th>DELETE</th>
                    </tr>
                </thead>

                <?php

                if ($query_run) {
                    while ($row = mysqli_fetch_array($query_run)) {
                ?>

                        <tbody>
                            <tr>
                                <th><?php echo $row['id']; ?> </th>
                                <th><?php echo $row['fname']; ?> </th>
                                <th><?php echo $row['lname']; ?> </th>
                                <th><?php echo $row['contact']; ?> </th>
                                <form action="UpdateData.php" method="post">
                                    <input type="hidden" name="id" value="<?php echo $row['id'] ?>">
                                    <th> <input type="submit" name="Edit" value="Edit" class="btn btn-primary">

                                </form>
                                <form action="delete.php" method="POST">
                                    <input type="hidden" name="id" value="<?php echo $row['id'] ?>">
                                    <th> <input type="submit" name="delete" value="delete" class="btn btn-danger">
                                </form>
                            </tr>
                        </tbody>

                <?php




                    }
                } else {
                    echo "No Record Found";
                }


                ?>
            </table>

        </div>
    </div>

</body>

</html>