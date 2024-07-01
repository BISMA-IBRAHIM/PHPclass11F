<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.4.1/dist/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
</head>
<body>
    
<?php

$conn = mysqli_connect('localhost','root','','query');
// if($conn)
// {
//     echo "Connected";
// }
// else
// {
//     echo "Not Connected";
// }


$query = "SELECT `Id`, `Name`, `City` FROM `info`";

$result = mysqli_query($conn,$query);

if(mysqli_num_rows($result) >0)
{
    while($row = mysqli_fetch_assoc($result))
    {
       echo "<table class='table'>

    <tr>
      <th>Id</th>
      <th>Name</th>
      <th>City</th>
    </tr>

  <tbody>
        <tr>

        <td>".$row['Id']."</td>
        <td>".$row['Name']."</td>
        <td>".$row['City']."</td>
        </tr>
  
  </tbody>
</table>";
    }   
}
else
{
    echo "0 results";
}





?>


</body>
</html>