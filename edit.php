<?php
include "conn.php";

if (isset($_GET["edit_id"])) {
    $edit_id = $_GET["edit_id"];

    $view_qry = "SELECT * FROM dbemployeelist WHERE id='$edit_id'";
    $view_qry_a = mysqli_query($conn, $view_qry);
    $view_qry_b = mysqli_fetch_array($view_qry_a);
    // echo'<pre>';print_r($view_qry_b);exit;
    $gender = $view_qry_b["dbgender"];
}
if (isset($_POST["usersubmit"])) {
    $ids = $_POST["ids"];
    $vrname = $_POST["username"];
    $vremployee = $_POST["useremployee"];
    $vrsalary = $_POST["usersalary"];
    $vrgender = $_POST["gender"];

    // echo $vrname;
    // echo $vremployee;
    // echo $vrsalary;
    // echo $vrgender;
    // exit();

    $updating = "UPDATE dbemployeelist SET dbname='$vrname',dbemployee='$vremployee',dbsalary='$vrsalary',dbgender='$vrgender' WHERE id = '$ids'";
    $connecting = mysqli_query($conn, $updating);
    if ($connecting) {
        header("Location:view.php");
    }
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <title>Edit</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
</head>

<body>
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-6">
                <h1>Update Employee Data</h1>
                <form method="POST">
                    <input type="hidden" name="ids" value="<?php echo $view_qry_b['id'] ?>"><br>
                    Name :<input type="text" class="form-control" name="username" value="<?php echo $view_qry_b['dbname'] ?>"><br>
                    Employee :<input type="text" class="form-control" name="useremployee" value="<?php echo $view_qry_b['dbemployee'] ?>"><br>
                    salary :<input type="text" class="form-control" name="usersalary" value="<?php echo $view_qry_b['dbsalary'] ?>"><br>
                    <?php
                    switch ($gender) {
                        case 'male':
                            echo 'Male :<input type="radio" name="gender" value="male" checked><br>
        female :<input type="radio" name="gender" value="female"><br>';
                            break;
                        case 'female':
                            echo 'Male :<input type="radio" name="gender" value="male" ><br>
        female :<input type="radio" name="gender" value="female" checked><br>';
                            break;
                        default:
                            echo 'Male :<input type="radio" name="gender" value="male" ><br>
        female :<input type="radio" name="gender" value="female">';
                    }
                    ?>
                    <button type="submit" name="usersubmit" class="btn btn-danger">Update</button>
                </form>
            </div>
        </div>
    </div>
</body>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.min.js"></script>

</html>