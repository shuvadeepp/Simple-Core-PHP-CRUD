<?php include "conn.php"; ?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title> View </title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
</head>

<body>
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-6">
                <h3>Employee Records</h3>
                <table class="table table-bordered">
                    <tr>
                        <th>Sl No</th>
                        <th>Name</th>
                        <th>Employee</th>
                        <th>Salary</th>
                        <th>Gender</th>
                        <th>Action</th>
                    </tr>
                    <?php
                    $tableprint =  "SELECT * FROM dbemployeelist";
                    $tableconnect = mysqli_query($conn, $tableprint);
                    $increment = 0;
                    while ($row = mysqli_fetch_array($tableconnect)) {
                        $increment++;
                    ?>
                        <tr>
                            <td><?php echo $increment; ?></td>
                            <td><?php echo $row["dbname"] ?></td>
                            <td><?php echo $row["dbemployee"] ?></td>
                            <td><?php echo $row["dbsalary"] ?></td>
                            <td><?php echo $row["dbgender"] ?></td>
                            <td>
                                <a href="edit.php?edit_id=<?php echo $row['id'] ?>"><button type="button" style="background-color:green;">Edit</button></a>
                                <a href="delete.php?delete_id=<?php echo $row['id'] ?>"><button type="button" style="background-color:yellow;">Delete</button></a>
                            </td>
                        </tr>
                    <?php
                    }
                    ?>
                </table>
            </div>
        </div>
    </div>
</body>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.min.js"></script>

</html>