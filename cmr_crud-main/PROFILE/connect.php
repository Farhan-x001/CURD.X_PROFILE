<?php

$con=new mysqli("localhost","root","","crud_operations");

if($con){
    //echo "connection succes";
}else{
    die(mysqli_error($con));
}



?>