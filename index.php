<?php
   include "conn.php";
   
   
   if (isset($_POST["usersubmit"])) 
   
   {
   
       $vrname = $_POST["username"];
   
       $vremployee = $_POST["useremployee"];
   
       $vrsalary = $_POST["usersalary"];
   
       $vrgender = $_POST["gender"];
   
   
   
       //testing sucessfully complete
   
       // echo $vrname;
   
       // echo $vremployee;
   
       // echo $vrsalary;
   
       // echo $vrgender;
   
       // exit();
   
       $inserting = "INSERT INTO dbemployeelist(dbname, dbemployee, dbsalary, dbgender) VALUES('$vrname', '$vremployee', '$vrsalary', '$vrgender')";
   
       $connecting = mysqli_query($conn,$inserting);
   
   }
   
   ?>
<!DOCTYPE html>
<html lang="en">
   <head>
      <title>Insert Page</title>
      <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
      <style>
         form{
         text-align:center;
         padding:20px;
         font-size:22px;
         background-color:red;
         border:20px solid black;
         font-style: italic;
         }
         form input{
         padding:6px;
         border-radius:10px;
         margin:6px;
         }
         h1{
         text-align:center;
         font-size:50px;
         background-color:green;
         font-style: italic;
         }
         button{
         background-color:black;
         color:white;
         border:none;
         padding:12px;
         font-size:12px;
         border-radius:20px;
         }
      </style>
   </head>
   <body>
      <div class="container">
         <div class="row justify-content-center">
            <div class="col-md-6">
               <h1>Employee record</h1>
               <form method="POST">
                  Name :<input type="text" name="username"><br>
                  Employee :<input type="text" name="useremployee"><br>
                  salary :<input type="text" name="usersalary"><br>
                  Male :<input type="radio" name="gender" value="male" checked><br>
                  female :<input type="radio" name="gender" value="female"><br>
                  <button type="submit" name="usersubmit">Click Here</button>
               </form>
            </div>
         </div>
      </div>
   </body>
   <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.min.js"></script>
</html>