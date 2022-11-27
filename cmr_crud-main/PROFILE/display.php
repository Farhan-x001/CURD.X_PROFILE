<?php
include 'connect.php';
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-ewuiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width,initial-scale=1.0">
    <title>crud operation</title> 
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">
</head>
<body>
<div class="container">
    <button class="btn btn-primary my-5"><a href="index.php"class="text-light">Add user</a>
</button>
<table class="table">
  <thead>
    <tr>
      <th scope="col">sl no</th>
      <th scope="col">name</th>
      <th scope="col">Email</th>
      <th scope="col">mobile</th>
      <th scope="col">feedback</th>
      <th scope="col">Operation</th>

    </tr>
  </thead>
  <tbody>
  <?php
$sql="Select * from `crud`";
$result=mysqli_query($con,$sql);
if($result){
    while($row=mysqli_fetch_assoc($result)){
        $id=$row['id'];
        $name=$row['Name'];
        $email=$row['Email'];
        $mobile=$row['Mobile'];
        $feedback=$row['feedback'];
        echo '<tr>
        <th scope="row">'.$id.'</th>
        <td>'.$name.'</td>
        <td>'.$email.'</td>
        <td>'.$feedback.'</td>
        <td>
        <button class="btn btn-primary"><a href="update.php? updateid='.$id.'" class="text-light">Update</a></button>
        <button class="btn btn-danger"><a href="delete.php? deleteid='.$id.'"class="text-light">Delete</a></button>
        </td>
      </tr>';

    }
}

?>

  </tbody>
</table>
</div>   
</body>
</html>