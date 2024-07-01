<?php
include('connection.php');
?>



<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Bootstrap demo</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
  </head>
  <body>
  <form action="" method="post">
 <div class="container">
<label>Name</label>
<input type="text" class="form-control" name="name" placeholder="Enter your name" ><br>
<label>City</label>
<input type="text" class="form-control" name="city" placeholder="Enter your city" ><br>
<input type="submit" value="Submit" name="btn" class="btn btn-md btn-primary">
 </div>
 </form>
</body>
</html>


<?php

if (isset($_POST['btn'])){
$name = $_POST['name'];
$city = $_POST['city'];


$q = "INSERT INTO 'info' (`name`, `city`) VALUES (? , ?)";

$stmt = mysqli_prepare($conn, $q);


mysqli_stmt_bind_param($stmt, "ss" , $name, $city);
$result = mysqli_stmt_execute($stmt);

if($result)
{
  echo "<script>alert('Inserted')</script>";
}
else{
 echo "<script>alert('Not Inserted')</script>";
}
}





?>