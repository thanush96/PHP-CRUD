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
                                <th> <a href="" class="btn btn-primary">Edit</a></th>
                                <th> <a href="" class="btn btn-danger">Delete</a></th>
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