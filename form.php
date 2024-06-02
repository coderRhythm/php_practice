<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

    <title>Document</title>
</head>
<body>
    <h1>Please connect that::;</h1>
<div class="container my-5">
<form action = "form.php" method = "POST">
  <div class="form-group">
    <label for="email">Email address</label>
    <input type="email" name = "email" class="form-control" id="email" aria-describedby="emailHelp" placeholder="Enter email">
    <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small>
  </div>
  <div class="form-group">
    <label for="password">Password</label>
    <input type="password" name="password" class="form-control" id="password" placeholder="Password">
  </div>
  
  <button type="submit" class="btn btn-primary">Submit</button>
</form>
</div>
</body>
</html>

<?php

    if($_SERVER['REQUEST_METHOD']=="POST")
    {
        $email = $_POST['email'];
        $password = $_POST['password'];

        //create teh database conenction 
        $servername = "localhost";
        $username  ="root";
        $pass = "root";
        $database = "pp";

        $conn = mysqli_connect($servername,$username,$pass,$database);
        //verify the connection
        if(!$conn)
        {
            echo "not connected!!";
        }
        else{
            echo "connected";
        }




        //inserting the value
        $sql = "insert into `p`(`email`,`password`) values('$email','$password');";

        $result = mysqli_query($conn,$sql);


        if($result)
        {
            echo "not connected";
        }
        else{
            echo "connected";
        }


    }


?>