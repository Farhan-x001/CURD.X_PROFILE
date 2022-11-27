
<?php
include 'connect.php';
$id=$_GET['updateid'];
$sql="Select * from `crud` where id=$id";
$result=mysqli_query($con,$sql);
$row=mysqli_fetch_assoc($result);
$name=$row['Name'];
$email=$row['Email'];
$mobile=$row['Mobile'];
$feedback=$row['feedback'];
if(isset($_POST['submit'])){
  $name=$_POST['name'];
  $email=$_POST['email'];
  $mobile=$_POST['mobile'];
  $feedback=$_POST['feedback'];


  $sql="update `crud` set id='$id',name='$name',email='$email',mobile='$mobile',feedback='$feedback'
  where id=$id";
  $result=mysqli_query($con,$sql);
  if($result){
    echo "updated  successfully";
   //header('location:display.php');
  }else{
    die(mysqli_error($con)); 
  }
}
?>

<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>FARHAN AHMED</title>
    <link href="https://fonts.googleapis.com/css?family=Caveat|Montserrat:400,600&display=swap" rel="stylesheet">
    <link href='https://fonts.googleapis.com/css?family=Poppins' rel='stylesheet'>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.2/font/bootstrap-icons.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">
    <link rel="stylesheet" href="css/styles.css">
  </head>
  <body>
        <div class="container my-5">
        <form method="post">
      <div class="mb-3">
        
      <div class="container my-5">
        <form method="post">
  <div class="form-group">
    <label>Name</label>
    <input type="text" class="form-control" placeholder="enter your name" name="name" value=<?php 
    echo $name;?>
    >
  </div>
  <div class="form-group">
    <label>Email</label>
    <input type="email" class="form-control" placeholder="enter your email" name="email" value=<?php 
    echo $email;?>>
  </div>
  <div class="form-group">
    <label>Mobile</label>
    <input type="number" class="form-control" placeholder="enter your number" name="mobile" value=<?php 
    echo $mobile;?>>
  </div>
  <div class="form-group">
    <label>feedback</label>
    <input type="text" class="form-control" placeholder="enter your feedback" name="feedback" value=<?php 
    echo $feedback;?>>
  </div>
  <button type="submit" class="btn btn-primary" name="submit">Update</button>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>
      </footer>
    </main>
  </body>
</html>
